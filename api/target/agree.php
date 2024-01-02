<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>跳转提示 - 智识の小站</title>
    <link rel="shortcut icon" href="https://static.myssl.com/res/images/touch/myssl-192x192.png" type="image/x-icon">
    <style>
        body,
        h1,
        p {
            margin: 0;
            padding: 0;
        }

        a {
            text-decoration: none;
        }

        button {
            padding: 0;
            font-family: inherit;
            background: none;
            border: none;
            outline: none;
            cursor: pointer;
        }

        html {
            width: 100%;
            height: 100%;
            background-color: #eff2f5;
        }

        body {
            padding-top: 100px;
            color: #222;
            font-size: 13px;
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            line-height: 1.5;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        }

        @media (max-width: 620px) {
            body {
                font-size: 15px;
            }
        }

        .button {
            display: inline-block;
            padding: 10px 16px;
            color: #fff;
            font-size: 14px;
            line-height: 1;
            background-color: #0077d9;
            border-radius: 3px;
        }

        @media (max-width: 620px) {
            .button {
                font-size: 16px;
            }
        }

        .button:hover {
            background-color: #0070cd;
        }

        .button:active {
            background-color: #0077d9;
        }

        .link-button {
            color: #105cb6;
            font-size: 13px;
        }

        @media (max-width: 620px) {
            .link-button {
                font-size: 15px;
            }
        }

        .logo,
        .wrapper {
            margin: auto;
            padding-left: 30px;
            padding-right: 30px;
            max-width: 540px;
        }

        .wrapper {
            padding-top: 25px;
            padding-bottom: 25px;
            background-color: #f7f7f7;
            border: 1px solid #babbbc;
            border-radius: 5px;
        }

        @media (max-width: 620px) {
            .logo,
            .wrapper {
                margin: 0 10px;
            }
        }

        h1 {
            margin-bottom: 12px;
            font-size: 16px;
            font-weight: 700;
            line-height: 1;
        }

        @media (max-width: 620px) {
            h1 {
                font-size: 18px;
            }
        }

        .warning {
            color: #c33;
        }

        .link {
            margin-top: 12px;
            word-wrap: normal;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            cursor: pointer;
        }

        .link.is-expanded {
            word-wrap: break-word;
            white-space: normal;
        }

        .actions {
            margin-top: 15px;
            padding-top: 30px;
            text-align: right;
            border-top: 1px solid #d8d8d8;
        }

        .actions .link-button + .link-button {
            margin-left: 30px;
        }

        .tip {
            position: relative;
            display: none;
            margin-top: 30px;
            padding-top: 18px;
            color: #999;
            text-align: left;
            background: #f7f7f7;
            border-top: 1px solid #d8d8d8;
            opacity: 0;
            transition: opacity .2s ease-out;
        }

        .tip.is-visible {
            opacity: 1;
        }

        .tip:after, .tip:before {
            position: absolute;
            bottom: 100%;
            right: 5em;
            content: " ";
            height: 0;
            width: 0;
            border: solid transparent;
            pointer-events: none;
        }

        .tip:after {
            margin-right: -6px;
            border-color: rgba(247, 247, 247, 0);
            border-bottom-color: #f7f7f7;
            border-width: 6px;
        }

        .tip:before {
            margin-right: -7px;
            border-color: rgba(216, 216, 216, 0);
            border-bottom-color: #d2d2d2;
            border-width: 7px;
        }
    </style>
</head>
<body>
<div class="logo">
    <a href="https://www.mixao.cn">
        <img src="//static.mixao.cn/static/img/logo_black_trans.png"
             srcset="//static.mixao.cn/static/img/logo_black_trans@2x.png 2x" alt="智识の小站">
    </a>
</div>
<div class="wrapper">
    <div class="content">
        <h1>即将离开 智识の小站</h1>
        <p class="info">您即将离开 智识の小站，请注意您的帐号和财产安全。</p>
        <p class="link"><?php echo htmlspecialchars($url); ?></p>
    </div>
    <div class="actions">
        <a class="button" href="<?php echo htmlspecialchars($url); ?>">继续访问</a>
    </div>
</div>
</body>
</html>
