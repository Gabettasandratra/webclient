<style>
        .loader {
            opacity: 0;
            visibility: hidden;
            position: fixed;
            top: 0; left: 0; right: 0; bottom: 0;
            background-color: #fff;
            z-index: 1000;
            transition: all 1s ease;
        }

        .loader .img-loader, .loader .loader-text {
            position: absolute;
            top: 50%;
            left: 50%;
            margin-left: -100px;
            margin-top: -100px;
        }

        .loader .loader-text {
            margin: 0;
            transform: translate(-50%, -50%);
            text-align: center;
            width: 90%;
        }

        .loader .loader-text figure {
            width: 100%;
            margin: 0 auto;
        }

        .loader .loader-text .message {
            font-family: 'Open Sans', sans-serif;
            font-size: 12px;
            color: #fff;
            display: block;
            text-align: center;
        }

        body.loading {
            overflow: hidden;
        }

        body.loading .loader {
            opacity : 1;
            visibility: visible;
            transition: none;
        }
    </style>