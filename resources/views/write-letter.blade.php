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

            .custom-title {
                font-size: 3rem;
            }

            .custom-textarea {
                font-size:17px;
                border-radius: 10px;
                border: 2px solid #95b8eeff;
                box-shadow: 0 0 20px #85aae3ff, 0 0 10px #96bdf8ff;
                transition: box-shadow 1s ease-in-out;
                width: 650px;
                height: 350px;
                padding: 10px;
                animation: breathe 4s ease-in-out infinite;
            }

            .custom-textarea:focus {
                box-shadow: 0 0 12px #a1e2efff, 0 0 15px #85aae3ff;
                outline: none;
            }

            /* Add breathing animation */
            @keyframes breathe {
                0% {
                    box-shadow: 0 0 15px #85aae3ff, 0 0 5px #96bdf8ff;
                    transform: scale(1);
                }
                50% {
                    box-shadow: 0 0 25px #a1e2efff, 0 0 15px #85aae3ff;
                    transform: scale(1.01);
                }
                100% {
                    box-shadow: 0 0 15px #85aae3ff, 0 0 5px #96bdf8ff;
                    transform: scale(1);
                }
            }

            .btn {
                width: 100px;
                padding: 8px;
                font-size: 1.1rem;
                box-shadow: 0 0 30px hsl(204, 79%, 80%);
            }



        </style>
    </head>
    <body>
        <div class="d-flex flex-column justify-content-center align-items-center min-vh-100 text-center bg-light p-5 rounded">
            <h1 class="mb-4 text-center custom-title">Write a letter to Jesus</h1>

            {{-- <!--to show a success message to the user after submitting the form-->
            @if (session('amen')) 
                <div class="alert alert-success">
                    {{session('amen')}}
                </div>
            @endif --}}


            <!--form-label, form-control, btn, btn-primary = all Bootstrap classes to style inputs and buttons-->
            <div class="mb-3">
                <form action="/write" method="POST">
                    @csrf <!-- Laravel requires this for security -->
                    <textarea class="custom-textarea" name="content" rows="5" cols="40" placeholder="Dear my Everything in Heaven, ..." class="form-control"></textarea>
                    <br><br>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Amen</button>
                    </div>
                </form>
            </div>
        </div>
        

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>