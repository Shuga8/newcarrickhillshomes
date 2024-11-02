<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Subcription Successfull</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Old+Standard+TT:ital,wght@0,400;0,700;1,400&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet">
    </head>

    <body
        style="width: 100%;height:100vh;display:flex;justify-content:center;align-items:center;place-content:center;place-items:center;background:#ddd;">

        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: "Poppins", sans-serif;
            }
        </style>

        <div
            style="position: relative;width: 90%;max-width:600px;height:70dvh;background:#fff;border-top: 7px solid rgb(46, 2, 99);">
            <div style="margin: 10px 0px">
                <img src="https://newcarrickhills.com/assets/logo-light.png"
                    style="display:block;width: 100px;height:100px;object-fit:contain;margin: 0px auto;" alt="">
            </div>

            <h1 style="font-size: 14px;color:#212121;padding: 0px 18px;font-weight:400;margin-bottom:30px;">
                Dear {{ $data['email'] }},
            </h1>

            <div
                style="display: flex;justify-content:center;place-items:center;padding:20px 15px;flex-direction:column;row-gap:25px;">
                <p
                    style="padding: 10px 10px;background: rgba(46, 2, 99, .8);color: #fff;text-align:center;width:fit-content;font-size:13px;">
                    Your Subscription was successfull.
                </p>

                <p
                    style="padding: 10px 10px;background: rgba(46, 2, 99, .8);color: #fff;text-align:center;width:fit-content;font-size:13px;">
                    You'll be recieving newsletters from us every week.
                </p>

                <p
                    style="padding: 5px 10px;color: rgba(46, 2, 99, .8);text-align:center;width:fit-content;font-weight:550;">
                    THANK YOU!
                </p>
            </div>

            <div
                style="position: absolute;bottom:100px; padding: 12px 20px;display:flex;justify-content:center;gap:20px;flex-direction:row;width:100%;">
                <a href="" target="_blank" style="width: fit-content;">
                    <img src="https://newcarrickhills.com/assets/icons/instagram.png"
                        style="width: 35px;height:35px;border-radius:3px;object-fit:contain;" alt="Instagram">
                </a>

                <a href="" target="_blank" style="width: fit-content;">
                    <img src="https://newcarrickhills.com/assets/icons/facebook.png"
                        style="width: 35px;height:35px;border-radius:3px;object-fit:contain;" alt="Instagram">
                </a>

                <a href="" target="_blank" style="width: fit-content;">
                    <img src="https://newcarrickhills.com/assets/icons/linkedin.png"
                        style="width: 35px;height:35px;border-radius:3px;object-fit:contain;" alt="Instagram">
                </a>
            </div>

            <div
                style="position: absolute;bottom:10px; padding: 12px 20px;display:flex;justify-content:center;gap:7px;flex-direction:column;width:100%;">

                <p style="font-size:11px;color:rgb(251, 36, 36);text-align:center;">Love, <a
                        style="color: rgb(7, 45, 140);" target="_blank" href="https://newcarrickhills.com/">New
                        Carrick Hills
                        Homes</a></p>

                <p style="font-size:11px;color:rgb(2, 14, 67);text-align:center;">&copy; <a href=""
                        target="_blank">OneThought Technologies</a>&trade;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>
                </p>
            </div>
        </div>

    </body>

</html>