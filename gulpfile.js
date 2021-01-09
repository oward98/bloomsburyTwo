const postcss = require('gulp-postcss');
const rename = require('gulp-rename');
const { src, dest, series, watch } = require('gulp');
const transpiler = require('postcss-preset-env');
const minifier = require('cssnano');
const combiner = require('postcss-import');
const browserSync = require('browser-sync').create();

const combineCSS = () => {
    const plugin = [
        combiner()
    ];
    return (
        src('./rawStylesheets/style.css')
        .pipe(postcss(plugin))
        .pipe(rename('1combinedStylesheet.css'))
        .pipe(dest('./processedStylesheets'))
    )
}

const minifyCSS = () => {
    const plugin = [
        minifier()
    ]
    return (
        src('./processedStylesheets/1combinedStylesheet.css')
        .pipe(postcss(plugin))
        .pipe(rename('2minifiedStylesheet.css'))
        .pipe(dest('./processedStylesheets'))
    )
}

const transpileCSS = () => {
    const plugin = [
        transpiler()
    ]
    return (
        src('./processedStyleSheets/2minifiedStylesheet.css')
        .pipe(postcss(plugin))
        .pipe(rename('3transpiledStylesheet.css'))
        .pipe(dest('./processedStyleSheets'))
    )
}

const updateCSS = () => {
    watch('./rawStylesheets/stylesheets/*.css', series(combineCSS, minifyCSS, transpileCSS));
    watch('./rawStylesheets/style.css', series(combineCSS, minifyCSS, transpileCSS));
}

exports.default = updateCSS;