// gulpプラグインを読み込む。かつ、parallelでコンパイルタスクを並列実行できるように。
const { src, dest, watch, parallel } = require("gulp");
const sass = require("gulp-sass")(require("sass"));
const postcss = require("gulp-postcss");
const autoprefixer = require("autoprefixer");

// style.scssをコンパイル
const compileStyleSass = () => {
  return src("sass/style.scss", { sourcemaps: true })
    .pipe(
      sass({
        outputStyle: "expanded",
      }).on("error", sass.logError)
    ) // コンパイルエラー時に、watchタスクを止めずにエラー内容を詳細に表示する
    .pipe(postcss([autoprefixer({ grid: true })])) // autoprefix処理(IEでもgrid対応)
    .pipe(dest("css", { sourcemaps: "." }));
};

// front-page.scssをコンパイル
const compileFrontPageSass = () => {
  return src("sass/page/front-page.scss", { sourcemaps: true })
    .pipe(
      sass({
        outputStyle: "expanded",
      }).on("error", sass.logError)
    )
    .pipe(postcss([autoprefixer({ grid: true })]))
    .pipe(dest("css", { sourcemaps: "." }));
};

// Sassファイルを監視
const watchSassFiles = () => {
  watch(
    "sass/**/*.scss",
    { ignoreInitial: false }, // パーシャルファイルの変更も検知するためのオプション
    parallel(compileStyleSass, compileFrontPageSass)
  );
};

// npx gulpでwatchSassFilesが実行されるように
exports.default = watchSassFiles;
