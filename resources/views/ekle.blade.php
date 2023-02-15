<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="">
</head>

<body>
    <div class="container mt-3">
        <div>
            <a href="{{ route('gibir') }}" class="btn btn-primary float-start">Anasayfa</a>
            <h3 style="display: flex; justify-content: center">Manuel Giriş</h3>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-sm-12 mt-4">
                <div class="p-5 border-2 border border-secondary rounded">
                    <h2>Manuel Veri Giriş Formu</h2>
                    <hr>
                    <form class="row g-3 row-cols-4" action="{{ route('firma.ekle') }}" method="post">
                        @csrf
                        <div class="col">
                            <label for="validationServer01" class="form-label">S.No</label>
                            <input type="text" class="form-control" id="validationServer01" name="s_no" placeholder="S.No" required>
                        </div>
                        <div class="col">
                            <label for="validationServer02" class="form-label">Durum</label>
                            <input type="text" class="form-control" id="validationServer02" name="durum" placeholder="Durum" required>
                        </div>
                        <div class="col">
                            <label for="validationServer02" class="form-label">Devre No</label>
                            <input type="text" class="form-control" id="validationServer02" name="devre_no" placeholder="Devre No" required>
                        </div>
                        <div class="col">
                            <label for="validationServer02" class="form-label">Firma</label>
                            <input type="text" class="form-control" id="validationServer02" name="firma" placeholder="Firma" required>
                        </div>
                        <div class="col">
                            <label for="validationServer02" class="form-label">Lokasyon</label>
                            <input type="text" class="form-control" id="validationServer02" name="lokasyon" placeholder="Loksayon" required>
                        </div>
                        <div class="col">
                            <label for="validationServer02" class="form-label">Devre Hızı</label>
                            <input type="text" class="form-control" id="validationServer02" name="devre_hizi" placeholder="Devre Hızı" required>
                        </div>
                        <div class="col">
                            <label for="validationServer02" class="form-label">Koordinat</label>
                            <input type="text" class="form-control" id="validationServer02" name="koordinat" placeholder="Koordinat" required>
                        </div>
                        <div class="col">
                            <label for="validationServer02" class="form-label">BBK</label>
                            <input type="text" class="form-control" id="validationServer02" name="bbk" placeholder="BBK" required>
                        </div>
                        <div class="col">
                            <label for="validationServer03" class="form-label">Uç Vlan</label>
                            <input type="text" class="form-control" id="validationServer03" aria-describedby="validationServer03Feedback" name="uc_vlan" placeholder="Uç Vlan" required>
                        </div>
                        <div class="col">
                            <label for="validationServer03" class="form-label">Pop Vlan</label>
                            <input type="text" class="form-control" id="validationServer03" aria-describedby="validationServer03Feedback" name="pop_vlan" placeholder="Pop Vlan" required>
                        </div>
                        <div class="col">
                            <label for="validationServer04" class="form-label">Türü</label>
                            <select class="form-select" id="validationServer04" aria-describedby="validationServer04Feedback" name="turu" required>
                                <option value="">Türü Seçin</option>
                                <option value="KISMİ">Kısmi</option>
                                <option value="OMURGA">Omurga</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary float-end" type="submit" value="Gönder">Kayıtı
                                Tamamlayın
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
