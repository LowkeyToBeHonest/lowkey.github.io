<?php
include 'conndb.php'; // Pastikan koneksi database sudah benar

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM tbmhs WHERE id='$id'";
    
    if (mysqli_query($conn, $query)) {
        echo "<script>window.location.href='indexxx.php';</script>";
    } else {
        echo "<script>$('#errorModal').modal('show');</script>";
    }
} else {
    echo "<script>$('#errorModal').modal('show');</script>";
}
?>

<!-- Add this modal HTML at the end of the file -->
<div class="modal fade" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="errorModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="errorModalLabel">Error</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Terjadi kesalahan saat menghapus data.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary" onclick="window.location.href='hapus.php'">Kembali</button>
            </div>
        </div>
    </div>
</div>