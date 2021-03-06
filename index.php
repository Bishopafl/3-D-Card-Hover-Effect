<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>3-D Hover Effect</title>
</head>
<body>
<style>
        html,body {
            height: 100%;
        }
        body {
            margin: 0;
            padding: 0;
            display: grid;
            background: #222831;
            place-items: center;
        }
        .container {
            position: relative;
            perspective: 40em;
            display: grid;
            transform-style: preserve-3d;
            font-family: sans-serif;
        }
        .card {
            grid-area: 1/1;
            height: 250px;
            width: 450px;
            transform: translateX(10px) rotateY(25deg) rotateX(10deg);
            background: #f7f7f7;
            justify-content: center;
            padding: 30px;
            font-size: 20px;
            font-weight: 900;
            backface-visibility: hidden;
            box-shadow: 0 10px 30px -3px rgba(0,0,0,1);
            opacity: 1;
            cursor: pointer;
        }
        h1 {
            font-size: 60px;
            font-weight: 900;
            text-align: center;
        }
        .card .write {
            color: #000;
            display: inline-block;
            transform: translate(-1px,1px) scale(0.75);
        }
        .container:before {
            --bw: 0px;
            content: '';
            grid-area: 1/1;
            backface-visibility: hidden;
            height: 100%;
            width: 100%;
            margin-top: calc(-1 * var(--bw));
            margin-left: calc(-1 * var(--bw));
            transform: translateX(-60px) rotateY(-30deg) rotateX(15deg) scale(1.03);
            pointer-events: none;
            border: var(--bw) solid #f0a500;
            box-sizing: content-box;
        }
        .container:hover > div,
        .container:hover:before {
            transform: none;
            opacity: 1;
        }
        .container > div,
        .container:before {
            will-change: transform;
            transition: 0.3s transform cubic-bezier(.25, .46, .45, 1);
        }
    </style>

<div class="container">
    <div class="card">
        <h1><span class="write">3-D Hover Effect for your face!</span></h1>
    </div>
</div>
    
</body>
</html>