<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PostBook | beta</title>
    <style>
    @import url("https://fonts.googleapis.com/css?family=Share+Tech+Mono|Montserrat:700");

* {
    margin: 0;
    padding: 0;
    border: 0;
    font-size: 100%;
    font: inherit;
    vertical-align: baseline;
    box-sizing: border-box;
    color: inherit;
}

main {
    background-image: linear-gradient(120deg, #4f0088 0%, #000000 100%);
    height: 100vh;
}

h1 {
    font-size: 45vw;
    text-align: center;
    position: fixed;
    width: 100vw;
    z-index: 1;
    color: #ffffff26;
    text-shadow: 0 0 50px rgba(0, 0, 0, 0.07);
    top: 50%;
    transform: translateY(-50%);
    font-family: "Montserrat", monospace;
}

.container {
    background: rgba(0, 0, 0, 0);
    width: 70vw;
    position: relative;
    top: 50%;
    transform: translateY(-50%);
    margin: 0 auto;
    padding: 30px 30px 10px;
    box-shadow: 0 0 150px -20px rgba(0, 0, 0, 0.5);
    z-index: 3;
}

.line {
    font-family: "Share Tech Mono", monospace;
    color: #f5f5f5;
    margin: 0 0 20px;
    font-size: 17px;
    line-height: 1.2;
}

.colo {
    color: #f0c674;
}

.sec-col {
    color: #8abeb7;
}

.link {
    text-decoration: underline;
}

.link:hover{
    color: #8abeb7;
}

b {
    color: #81a2be;
}

a.avatar {
    position: fixed;
    bottom: 15px;
    right: -100px;
    animation: slide 0.5s 4.5s forwards;
    display: block;
    z-index: 4
}

a.avatar img {
    border-radius: 100%;
    width: 44px;
    border: 2px solid white;
}

@keyframes slide {
    from {
        right: -100px;
        transform: rotate(360deg);
        opacity: 0;
    }
    to {
        right: 15px;
        transform: rotate(0deg);
        opacity: 1;
    }
}

</style>
</head>
<body>
    <main>
        <h1>403</h1>
        <div class="container">
            <p class="line">
                >
                <span class="colo">ERROR CODE</span>: "<i class="sec-col">HTTP 403 Forbidden</i>"
            </p>
            <p class="line"> 
                >
                <span class="colo">ERROR DESCRIPTION</span>: "<i class="sec-col">Access Denied. You Do Not Have The Permission To Access This Page On This Server</i>"
            </p>
            <p class="line">
                > 
                <span class="colo">ERROR POSSIBLY CAUSED BY</span>: [<b> need Login, read access forbidden, write access forbidden, ssl required, site access denied, source access denied,</b>...]
            </p>
            <p class="line">
                > 
                <span class="colo">SOME PAGES ON THIS Site THAT YOU DO HAVE PERMISSION TO ACCESS</span>: [ <a class="link" href="/">Home</a>, <a class="link" href="/store">Store</a>, <a class="link" href="/register">Register</a>, <a class="link" href="/login">Login</a>...]
            </p>
            <p class="line">
                > 
                <span class="colo">HAVE A NICE DAY SIR  :-)</span>
            </p>
        </div>
    </main>
</body>
</html>
<script>
    let str = document.getElementsByTagName('div')[0].innerHTML.toString();
    let i = 0;
    document.getElementsByTagName('div')[0].innerHTML = "";

    setTimeout(function() {
        let se = setInterval(function() {
            i++;
            document.getElementsByTagName('div')[0].innerHTML = str.slice(0, i) + "|";
            if (i == str.length) {
                clearInterval(se);
                document.getElementsByTagName('div')[0].innerHTML = str;
            }
        }, 10);
    },0);

</script>