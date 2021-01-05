const postcss = require('gulp-postcss');
const { src, dest, series } = require('gulp');
const transpiler = require('postcss-preset-env');
const minifier = require('cssnano');
const combiner = require('postcss-import');

const combineCSS = () => {
    const plugin = [
        combiner()
    ];
    return (
        src('./stylesheets/style.css')
        .pipe(postcss(plugin))
        .pipe(dest('./processedStylesheet'))
    )
}

const minifyCSS = () => {
    const plugin = [
        minifier()
    ]
    return (
        src('./processedStylesheet/style.css')
        .pipe(postcss(plugin))
        .pipe(dest('./minifiedStylesheet'))
    )
}

const transpileCSS = () => {
    const plugin = [
        transpiler()
    ]
    return (
        src('./minifiedStylesheet/style.css')
        .pipe(postcss(plugin))
        .pipe(dest('./transpiledStylesheet'))
    )
}

exports.default = series(combineCSS, minifyCSS, transpileCSS);