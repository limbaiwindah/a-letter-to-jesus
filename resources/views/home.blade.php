<!DOCTYPE html>
<html>
    <head>
        <title>To Lord, Jesus</title>
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

        <style>
            body, html {
                height: 100%;
                margin: 0;
                font-size: 16px; /* 1rem = 16px */
            }

            /* Define the "breathing" animation */
            @keyframes breathing {
                /* At the start (0%) and end (100%) of the animation: */
                0%, 100% {
                    transform: scale(1);    /* Element is at its normal size (100%) */
                    opacity: 0.6;           /* Slightly transparent (60% opacity) */
                }
                /* At the midpoint (50%) of the animation: */
                50% {
                    transform: scale(1.05); /* Element grows slightly larger (105% size) */
                    opacity: 0.9;           /* More opaque (90% opacity) */
                }
            }

            h1 {
                animation: breathing 6s ease-in-out infinite;
                font-size: 5rem;
            }

            .container {
                display: grid;
                place-items: center;
                height: 100vh;
            }

            .content {
                display: flex;
                flex-direction: column;
                align-items: center;
                gap: 1rem;
            }

            .btn {
                animation: breathing 9s ease-in-out infinite;
                font-size: 1.2rem;
            }
            
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <h1>He is Listening</h1>
                <a href="/write" class="btn btn-primary" style="padding:8px;border-radius: 5px;">Write a Letter</a>
            </div>
        </div>
    </body>
</html>