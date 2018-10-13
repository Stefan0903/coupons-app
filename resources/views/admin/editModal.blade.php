<div class="modal fade" id="editCouponModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Izmijeni kupon</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('coupon.update') }}" enctype='multipart/form-data'>
                    @csrf
                    {{ method_field('PATCH') }}
                    <input type="hidden" id="id" name="id" />
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name">Naziv kupona:</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong style="color:red">{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('sale') ? ' has-error' : '' }}">
                        <label for="sale">Popust kupona:</label>
                        <input type="text" class="form-control" id="sale" name="sale" required>
                        @if ($errors->has('sale'))
                            <span class="help-block">
                                <strong style="color:red">{{ $errors->first('sale') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('number') ? ' has-error' : '' }}">
                        <label for="number">Broj dostupnih kupona:</label>
                        <input type="nubmer" class="form-control" id="number" name="number" required>
                        @if ($errors->has('number'))
                            <span class="help-block">
                                <strong style="color:red">{{ $errors->first('number') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                        <label for="image">Slika kupona</label>
                        <input type="file" class="form-control-file" id="image" name="image" required>
                        @if ($errors->has('image'))
                            <span class="help-block">
                                <strong style="color:red">{{ $errors->first('image') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Otkaži</button>
                        <button type="submit" id="sacuvaj" class="btn btn-primary">Sačuvaj</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>