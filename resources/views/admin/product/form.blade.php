<div class="row_form">
    @include('admin.layouts.partials.errors')
    <div class="row">
        <div class="form-group col-md-6">
            <label class = 'form-label'>الاسم</label>
            {!! Form::text('title', null, ['class' => 'form-control', 'readonly' => $readonly, 'min' => 0, 'step' => 0.01]) !!}

        </div>
        <div class="form-group col-md-6">
            <label class = 'form-label'>السعر</label>
            {!! Form::number('price', null, ['class' => 'form-control', 'readonly' => $readonly, 'min' => 0, 'step' => 0.01]) !!}
        </div>

        <div class="form-group col-md-12">
            <label class = 'form-label'>الوصف</label>
            {!! Form::textarea('description', null, ['class' => 'form-control', 'readonly' => $readonly]) !!}
        </div>

    </div>

    @if (!$readonly)
        <div class="form-actions">
            <button type="submit" class="btn btn-primary">حفظ</button>
        </div>
    @endif
</div>




@push('scripts')


@endpush
