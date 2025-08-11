<!DOCTYPE html>
<html>
    <head>
        <title>Amen</title>
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

        <style>
            body, html {
                height: 100%;
                margin: 0;
                font-size: 16px; /* 1rem = 16px */
            }

            blockquote {
                font-size: 1.2rem;
            }

            .container {
                display: grid;
                place-items: center;
                height: 100vh;
                text-align: center;
            }

            .content {
                display: flex;
                flex-direction: column;
                gap: 1rem;
                align-items: center;
            }

            @keyframes glow {
                50% {
                    box-shadow: 0 0 60px hsl(203, 88%, 60%);
                }
            }

            .btn {
                width: 200px;
                padding: 10px;
                font-size: 1.1rem;
                animation: glow 5s ease-in-out infinite;
            }

        
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <h1>He heard your prayer 🙏</h1>
                <blockquote style="width: 500px;">
                    Now this is the confidence that we have in Him, that if we ask anything according to His will, He hears us. And if we know that He hears us, whatever we ask, we know that we have the petitions that we have asked of Him.
                    - 1 john 5:14-15 NKJV
                </blockquote>
                <a href="/write" class="btn btn-primary">Write another letter</a>
            </div>
            
        </div>  
    </body>
</html>
