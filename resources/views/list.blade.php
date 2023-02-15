<!DOCTYPE html>
<html lang="en">

<head>
    <title>Listeleme Sayfası</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    <script type="text/javascript" charset="utf8" src="/DataTables/datatables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css')}}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="/DataTables/datatables.css">
    <link rel="stylesheet" href="sweetalert2.min.css">

</head>

<body>

    <div class="container mt-5">
        <div>
            <a href=" {{ route('gibir')}}" class="btn btn-primary float-start">Anasayfa</a>
            <h3 style="display: flex; justify-content: center">Kayıt Listele</h3>
        </div>
        <table class="table table-striped table-hover table-sm table-dark table-bordered" id="table">
            <thead>
                <tr>
                    <th scope="col">K.No</th>
                    <th scope="col">S.No</th>
                    <th scope="col">Durum</th>
                    <th scope="col">Devre No</th>
                    <th scope="col">Firma</th>
                    <th scope="col">Lokasyon</th>
                    <th scope="col">Devre Hızı</th>
                    <th scope="col">Koordinat</th>
                    <th scope="col">BBK</th>
                    <th scope="col">UC VLAN</th>
                    <th scope="col">POP VLAN</th>
                    <th scope="col">Türü</th>
                    <th scope="col">İşlemler</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>

<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Firma Düzenle</h5>
                <button type="button" id="exitModal" class="btn-close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form action="#" method="post" class="row g-3 row-cols-4">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" id="id">
                    <div class="col">
                        <label for="validationServer01" class="form-label">S.No</label>
                        <input type="text" class="form-control" id="s_no" name="s_no" value=" # " placeholder="S.No" required>
                    </div>
                    <div class="col">
                        <label for="validationServer02" class="form-label">Durum</label>
                        <input type="text" class="form-control" id="durum" name="durum" value=" #" placeholder="Durum" required>
                    </div>
                    <div class="col">
                        <label for="validationServer02" class="form-label">Devre No</label>
                        <input type="text" class="form-control" id="devre_no" name="devre_no" value=" # " placeholder="Devre No" required>
                    </div>
                    <div class="col">
                        <label for="validationServer02" class="form-label">Firma</label>
                        <input type="text" class="form-control" id="firma" name="firma" value=" # " placeholder="Firma" required>
                    </div>
                    <div class="col">
                        <label for="validationServer02" class="form-label">Lokasyon</label>
                        <input type="text" class="form-control" id="lokasyon" name="lokasyon" value=" # " placeholder="Loksayon" required>
                    </div>
                    <div class="col">
                        <label for="validationServer02" class="form-label">Devre Hızı</label>
                        <input type="text" class="form-control" id="devre_hizi" name="devre_hizi" value=" #" placeholder="Devre Hızı" required>
                    </div>
                    <div class="col">
                        <label for="validationServer02" class="form-label">Koordinat</label>
                        <input type="text" class="form-control" id="koordinat" name="koordinat" value=" #" placeholder="Koordinat" required>
                    </div>
                    <div class="col">
                        <label for="validationServer02" class="form-label">BBK</label>
                        <input type="text" class="form-control" id="bbk" name="bbk" value=" # " placeholder="BBK" required>
                    </div>
                    <div class="col">
                        <label for="validationServer03" class="form-label">Uç Vlan</label>
                        <input type="text" class="form-control" id="uc_vlan" aria-describedby="validationServer03Feedback" value="uc_vlan" name="uc_vlan" placeholder="Uç Vlan" required>
                    </div>
                    <div class="col">
                        <label for="validationServer03" class="form-label">Pop Vlan</label>
                        <input type="text" class="form-control" id="pop_vlan" aria-describedby="validationServer03Feedback" name="pop_vlan" placeholder="Pop Vlan" required>
                    </div>
                    <div class="col">
                        <label for="validationServer04" class="form-label">Türü</label>
                        <select class="form-select" id="turu" aria-describedby="validationServer04Feedback" name="turu" required>
                            <option value="">Türü Seçin</option>
                            <option value="KISMİ">Kısmi</option>
                            <option value="OMURGA">Omurga
                            </option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="closeFirmaBtn" class="btn btn-secondary" data-dismiss="modal" >Kapat</button>
                <button type="submit" id="updateFirmaBtn" class="btn btn-primary">Güncelle</button>
            </div>
        </div>
    </div>
</div>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js" integrity="sha512-lbwH47l/tPXJYG9AcFNoJaTMhGvYWhVM9YI43CT+uteTRRaiLCui8snIgyAN8XWgNjNhCqlAUdzZptso6OCoFQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="sweetalert2.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        //  listeleme
        $(document).ready(function() {
            $('#table').DataTable({
                "processing": true,
                "serverSide": true,
                "ajax": "{{ route('firma.listele.data') }}",
                "columns": [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 's_no',
                        name: 's_no'
                    },
                    {
                        data: 'durum',
                        name: 'durum'
                    },
                    {
                        data: 'devre_no',
                        name: 'devre_no'
                    },
                    {
                        data: 'firma',
                        name: 'firma'
                    },
                    {
                        data: 'lokasyon',
                        name: 'lokasyon'
                    },
                    {
                        data: 'devre_hizi',
                        name: 'devre_hizi'
                    },
                    {
                        data: 'koordinat',
                        name: 'koordinat'
                    },
                    {
                        data: 'bbk',
                        name: 'bbk'
                    },
                    {
                        data: 'uc_vlan',
                        name: 'uc_vlan'
                    },
                    {
                        data: 'pop_vlan',
                        name: 'pop_vlan'
                    },
                    {
                        data: 'turu',
                        name: 'turu'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: true,
                        searchable: true
                    }
                ]
            });
        });

        // silme
        $(document).on('click', '#deleteCountryBtn', function() {
            var id = $(this).attr('id');
            if (confirm("Are you sure you want to delete this?")) {
                $.ajax({
                    type: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                        'X-HTTP-Method-Override': 'DELETE'
                    },
                    url: "/firma/sil/" + $(this).data('id'),
                    beforeSend: function() {
                        $('#table').DataTable().ajax.reload();
                    },
                    success: function(data) {
                        setTimeout(function (params) {
                        $('#table').DataTable().ajax.reload();
                        alert('Firma Silindi');
                        }, 2000);
                    }
                })

            } else {
                return false;
            }
        });



        // modala yükleme
        $(document).on('click', '#editCountryBtn', function() {
            var id = $(this).data('id');
            // console.log(id);
            $.ajax({
                type: 'GET',
                url: "/firma/detay/" + $(this).data('id'),
                success: function(data) {
                    $('#editModal').modal('show');
                    $('#id').val(data.id);
                    $('#s_no').val(data.s_no);
                    $('#durum').val(data.durum);
                    $('#devre_no').val(data.devre_no);
                    $('#firma').val(data.firma);
                    $('#lokasyon').val(data.lokasyon);
                    $('#devre_hizi').val(data.devre_hizi);
                    $('#koordinat').val(data.koordinat);
                    $('#bbk').val(data.bbk);
                    $('#uc_vlan').val(data.uc_vlan);
                    $('#pop_vlan').val(data.pop_vlan);
                    $('#turu').val(data.turu);
                }
            })
        });


        // Modaldaki verileri güncelleme
        $(document).on('click', '#updateFirmaBtn', function() {
            var id = $('#id').val();
            $.ajax({
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    'X-HTTP-Method-Override': 'PUT'
                },
                url: "/firma/guncelle/" + id,
                data: {
                    'id': $('#id').val(),
                    's_no': $('#s_no').val(),
                    'durum': $('#durum').val(),
                    'devre_no': $('#devre_no').val(),
                    'firma': $('#firma').val(),
                    'lokasyon': $('#lokasyon').val(),
                    'devre_hizi': $('#devre_hizi').val(),
                    'koordinat': $('#koordinat').val(),
                    'bbk': $('#bbk').val(),
                    'uc_vlan': $('#uc_vlan').val(),
                    'pop_vlan': $('#pop_vlan').val(),
                    'turu': $('#turu').val(),
                },
                success: function(data) {
                    $('#editModal').modal('hide');
                    $('#table').DataTable().ajax.reload();
                    alert('Firma Güncellendi');
                }
            })
        });

        // Modal kapatma tuşları
        $(document).on('click', '#exitModal, #closeFirmaBtn', function() {
            $('#editModal').modal('hide');
        });



    </script>


</body>
</html>
