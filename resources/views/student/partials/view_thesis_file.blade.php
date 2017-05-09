<!-- Fade In Modal -->
<div class="modal fade" id="view-thesis" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="block block-themed block-transparent remove-margin-b">
                    <div class="block-header bg-primary-dark">
                        <ul class="block-options">
                            <li>
                                <button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
                            </li>
                        </ul>
                        <h3 class="block-title">Xem khóa luận</h3>
                    </div>
                        <div class="block-content" style="height: 850px;">
                            <object data="{{ $topic->student->thesis_file }}" type="application/pdf" width="98%" height="100%">

                                <a  href="{{ $topic->student->thesis_file }}">...view Myfile..</a>
                            </object>
                        </div>

                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Close</button>
                </div>
            </div>
    </div>
</div>
<!-- END Fade In Modal -->
