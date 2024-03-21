<form action="{{ route('admin.survei.simpan') }}" onsubmit="return false" method="post" id="form-action">
    @csrf
    <div class="modal-body">
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label class="form-label">Tanggal Mulai</label>
                    <input type="date" name="tanggal_mulai" class="form-control" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label class="form-label">Tanggal Selesai</label>
                    <input type="date" name="tanggal_selesai" class="form-control" required>
                </div>
            </div>
        </div>

    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
    </div>
</form>

<script>
    $( "form#form-action" ).on( "submit", function(event) {
    event.preventDefault();
    const form = this;
    let settings = { headers: { 'content-type': 'multipart/form-data' } };
    axios.post($(form).attr('action'), form, settings)
   .then(response => {
    DTable.ajax.reload(null, false);
    $('#myModals').modal('hide');
    if (response.data.prm == true) {
        Swal.fire({
            title: "Berhasil",
            text: response.data.msg,
            icon: "success",
            showConfirmButton: false,
            timer: 1500
        });
    }else{
        Swal.fire({
            title: "Opsst",
            text: response.data.msg,
            icon: "warning",
            showConfirmButton: false,
            timer: 1500
        });
    }
    console.log(response)
   }).catch(error => {
    DTable.ajax.reload(null, false);
    $('#myModals').modal('hide');
    Swal.fire({
            title: "Kesalahan",
            text: "error sistem",
            icon: "danger",
            showConfirmButton: false,
            timer: 1500
        });
    console.log(error)
   })

    });


</script>