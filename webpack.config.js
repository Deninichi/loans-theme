const path = require('path');
const ExtractTextPlugin = require('extract-text-webpack-plugin');
const ReplaceInFileWebpackPlugin = require('replace-in-file-webpack-plugin');
const webpack = require('webpack');
const autoprefixer = require('autoprefixer');

 
// Theme name
const THEME_NAME = 'loans';
 
// Theme dir
const appPath = path.join(__dirname, '/');

// Main JS file
const jsPath = path.join(appPath, '/assets/js/index.js');

// Build dir
const outPath = path.join(appPath, '/assets/dist/js/');
 
// Split CSS and SASS
const extractSass = new ExtractTextPlugin({
    filename: '../css/style.css'
});
 
const extractCss = new ExtractTextPlugin({
    filename: '../css/style.min.css'
});
 
const rules = [
    // Bable rules
    {
        test: /\.js$/,
        exclude: /(node_modules|bower_components)/,
        use: {
            loader: 'babel-loader',
            options: {
                presets: ['env'],
                "plugins": [
                    ["babel-plugin-transform-builtin-extend", {
                        globals: ["Error"]
                    }]
                ]
            }
        }
    },
    // Load CSS 
    {
        test: /\.css$/,
        use: extractCss.extract({
            use: [
                'style-loader',
                { loader: 'css-loader', options: { importLoaders: 1, minimize: false } },
                'postcss-loader'
            ]
        })
    },
    // Rebuild SASS
    {
        rules: [{
            test: /\.scss$/,
            use: extractSass.extract({
                use: [
                    {
                        loader: "css-loader",
                        options: {
                            minimize: false
                        }
                    },
                    {
                        loader: 'postcss-loader'
                    },
                    {
                        loader: "sass-loader"
                    }
                ],
                fallback: "style-loader"
            })
        }]
    },
    /* Add hash to images
     */
    {
        test: /\.(png|jpg|gif)$/,
        use: [
            {
                loader: 'file-loader',
                options: {
                    context: 'public',
                    name: '../images/[name].[ext]?v=[hash]',
                    publicPath: './',
                },
            },
        ]
    },
    {
    test: /\.(woff2?|ttf|otf|eot|svg)$/,
        exclude: /node_modules/,
        loader: 'file-loader',
        options: {
            context: 'public',
            name: '../webfonts/[name].[ext]',
            publicPath: './'
        }
    }
];
 
const plugins = [
    extractCss,
    extractSass,
    /*
      Versions for js/css files
    */
    new ReplaceInFileWebpackPlugin([{
        dir: appPath,
        files: ['functions.php'],
        rules: [{
            search: new RegExp('\'_bld_(.*?)\'','ig'),
            replace: function() {
                return `'_bld_${Number(new Date())}'`
            }
        }]
    }]),
    /*
     Define Jquery
     */
    new webpack.ProvidePlugin({
        $: 'jquery',
        jQuery: 'jquery',
        'window.jQuery': 'jquery'
    })
];
 
module.exports = {
    context: appPath,
    entry: [
        'babel-polyfill',
        jsPath
    ],
    resolve: {
        modules: [path.resolve(__dirname), 'node_modules']
    },
    output: {
        path: outPath,
        publicPath: '/',
        filename: 'build.js'
    },
    module: {
        rules: rules
    },
    plugins: plugins,
    watch: true,
    externals: {
        'jquery': 'jQuery'
    }
};