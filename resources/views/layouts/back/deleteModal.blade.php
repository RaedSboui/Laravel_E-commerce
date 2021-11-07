<div class="modal fade" id="deleteModal">
    <div class="modal-dialog">
        <div class="modal-content bg-danger">
            <div class="modal-header">
                <h4 class="modal-title">ALLERT !!</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p id="nameToDelete" style="color: white"></p>
            </div>
            <div class="modal-footer">
                
                <form id="formDelete" method="POST">
                    <a type="button" class="btn btn-outline-light" data-dismiss="modal">No</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline-light">Yes</button>
                </form>
            </div>
        </div>
    </div>
</div>