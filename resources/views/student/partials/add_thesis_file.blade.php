<!-- Fade In Modal -->
<div class="modal fade" id="add_thesis_file" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <form class="js-validation-bootstrap form-horizontal" action="{{ route('thesis.store') }}" method="post" novalidate="novalidate" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="PUT">
            {{ csrf_field() }}
            <div class="modal-content">
                <div class="block block-themed block-transparent remove-margin-b">
                    <div class="block-header bg-primary-dark">
                        <ul class="block-options">
                            <li>
                                <button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
                            </li>
                        </ul>
                        <h3 class="block-title">Nạp khóa luận</h3>
                    </div>
                    <div class="block-content">
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="description" style="padding-top: 0">
                                Chọn file khóa luận <span class="text-danger">*</span>
                            </label>
                            <div class="col-md-8">
                                <input type="file" id="thesis_file" name="thesis_file">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Close</button>
                    <button class="btn btn-sm btn-primary" type="submit" ><i class="fa fa-check"></i> Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- END Fade In Modal -->
