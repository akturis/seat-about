<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title"><i class="fa fa-slack"></i> {{ trans('about::seat.info') }}</h3>
    </div>
    <form class="form-horizontal" id="formabout" method="POST" action="{{ route('setting.info.update') }}">
        {{ csrf_field() }}
            <div class="form-group">
                <label for="info_about" class="control-label"></label>
                <div class="col-lg-12">
                    <textarea name="info_about" id="info_about" form="formabout" class="about">{{ $about }}</textarea>
                </div>
            </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-info pull-right">{{ trans('about::seat.save') }}</button>
        </div>
    </form>
</div>
