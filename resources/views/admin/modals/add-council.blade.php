<!-- Fade In Modal -->
<div class="modal fade" id="add-council" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <form class="js-validation-bootstrap form-horizontal" action="{{ route('council.store') }}" method="post" novalidate="novalidate">
            {{ csrf_field() }}
            <div class="modal-content">
                <div class="block block-themed block-transparent remove-margin-b">
                    <div class="block-header bg-primary-dark">
                        <ul class="block-options">
                            <li>
                                <button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
                            </li>
                        </ul>
                        <h3 class="block-title">Thêm hội đồng</h3>
                    </div>
                    <div class="block-content">

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="name">Tên hội đồng <span class="text-danger">*</span></label>
                            <div class="col-md-7">
                                <input class="form-control" type="text" id="name" name="name" placeholder="Gõ tên hội đồng bảo vệ KL...">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="chairman">Tên chủ tịch hội đồng <span class="text-danger">*</span></label>
                            <div class="col-md-7">
                                <input class="form-control" type="text" id="chairman" name="chairman" placeholder="Gõ tên chủ tịch hội đồng...">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="secretary">Tên thư ký hội đồng <span class="text-danger">*</span></label>
                            <div class="col-md-7">
                                <input class="form-control" type="text" id="secretary" name="secretary" placeholder="Gõ tên thư ký hội đồng...">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Close</button>
                    <button class="btn btn-sm btn-primary" type="submit" ><i class="fa fa-check"></i> Ok</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- END Fade In Modal -->
