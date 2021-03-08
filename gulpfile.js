// gulpプラグインの読み込み
const gulp = require("gulp");
// Sassをコンパイルするプラグインの読み込み
const sass = require("gulp-dart-sass");
sass.compiler = require('sass');
const packageImporter = require('node-sass-package-importer');

// style.scssの監視タスクを作成する
gulp.task("default", function () {
    // ★ style.scssファイルを監視
    return gulp.watch(
        "./assets/scss/*.scss",
        function() {
            // style.scssの更新があった場合の処理
            return (
                gulp
                    .src("./assets/scss/*.scss")
                    // Sassのコンパイルを実行
                    .pipe(sass.sync().on('error', sass.logError))
                    .pipe(gulp.dest('./'))
                    // cssフォルダー以下に保存
            );
        }
    );
});
