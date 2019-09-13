const FRONTEND_PORT = process.env.FRONTEND_PORT
    ? process.env.FRONTEND_PORT
    : '8080';

module.exports = {
    // Development server options
    devServer: {
        hot: true,
        hotOnly: true,
        public: `0.0.0.0:${FRONTEND_PORT}`,
        historyApiFallback: true,
        disableHostCheck: true,
        watchOptions: {
            aggregateTimeout: 300
        },
        open: false
    }
};
