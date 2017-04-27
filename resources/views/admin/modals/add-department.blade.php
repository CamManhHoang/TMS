<!-- Fade In Modal -->
<div class="modal fade" id="add-department" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <form class="js-validation-bootstrap form-horizontal" action="{{ route('department.store') }}" method="post" novalidate="novalidate">
            {{ csrf_field() }}
            <div class="modal-content">
                <div class="block block-themed block-transparent remove-margin-b">
                    <div class="block-header bg-primary-dark">
                        <ul class="block-options">
                            <li>
                                <button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
                            </li>
                        </ul>
                        <h3 class="block-title">Thêm bộ môn</h3>
                    </div>
                    <div class="block-content">

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="name">Tên bộ môn (Tiếng Việt) <span class="text-danger">*</span></label>
                            <div class="col-md-7">
                                <input class="form-control" type="text" id="name" name="name" placeholder="Gõ tên bộ môn dạng Tiếng Việt...">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="name_en">Tên bộ môn (Tiếng Anh)</label>
                            <div class="col-md-7">
                                <input class="form-control" type="text" id="name_en" name="name_en" placeholder="Gõ tên bộ môn dạng Tiếng Anh...">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="descrpt">Mô tả</label>
                            <div class="col-md-8">
                                <textarea class="form-control" id="descrpt" name="descrpt" rows="6" placeholder="Mô tả về bộ môn.."></textarea>
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
