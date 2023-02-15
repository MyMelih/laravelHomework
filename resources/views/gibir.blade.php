<!DOCTYPE html>
<html lang="en">

<head>
    <title>Excel Panel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        .butonn {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .error-message {
            color: red;
            font-size: 14px;
            margin-top: 10px;
        }

        button[type="submit"][disabled] {
            background-color: #000;
            color: #ffffff;
        }
    </style>
</head>

<body class="body">
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-sm-6 mt-5">
                <div class="p-5 border-2 border border-secondary rounded">
                    <h2>Hızlı Excel Aktarın : </h2>
                    <form class="form mt-2" method="POST" enctype="multipart/form-data" action="{{ route('excel.yukle')}}">
                        @csrf
                        <input type="file" name="file" class="form-control" />
                        <div class="mt-4 butonn">
                            <button type="submit" class="btn btn-success">Gönder</button>
                        </div>
                    </form>
                    <hr>
                    <h2>Elle Veri Girin: </h2>
                    <a href="{{ route('firma.ekle')}}" class="btn btn-success mb-3">Elle Girin</a>
                    <hr>
                    <h2>Diğer İşlemler</h2>
                    <div class="mt-2">
                        <a href="{{ route('excel.indir')}}" class="btn btn-primary ">Kayıtları indirin.</a>
                        <a href="{{ route('firma.listele')}}" class="btn btn-secondary">Kayıtları Listele</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        const form = document.querySelector('.form');
        const fileInput = document.querySelector('input[name="file"]');
        const submitButton = document.querySelector('button[type="submit"]');
        const errorMessage = document.createElement('div');

        errorMessage.classList.add('error-message');
        form.appendChild(errorMessage);

        submitButton.disabled = true;

        fileInput.addEventListener('change', (event) => {
            const file = event.target.files[0];
            errorMessage.innerHTML = '';

            if (!file) {
                submitButton.disabled = true;
                errorMessage.innerHTML = 'Lütfen bir dosya seçiniz.';
                return;
            }

            if (!file.name.endsWith('.xlsx' && '.xls')) {
                submitButton.disabled = true;
                errorMessage.innerHTML = 'Lütfen sadece Excel dosyaları seçiniz.';
                return;
            }

            submitButton.disabled = false;
        });
    </script>

</body>

</html>
