<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title"><i class="fa fa-slack"></i> {{ trans('about::seat.info') }}</h3>
    </div>
    <form class="form-horizontal" method="POST" action="{{ route('setting.info.update') }}">
        {{ csrf_field() }}
        <div class="box-body">
            <div class="form-group">
                <label for="info" class="col-sm-3 control-label">{{ trans('about::info.enabled') }}</label>
                <div class="col-sm-9">
                    <div class="checkbox">
                        <label>
                            <input type="string" name="info" id="info" value="... fill info">
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-info pull-right">{{ trans('about::seat.save') }}</button>
        </div>
    </form>
</div>
