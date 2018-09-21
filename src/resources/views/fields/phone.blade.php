<input
        type="tel"
        pattern="+[0-9]{2}-[0-9]{8,}"
        id="{{ $field['name'] }}"
        name="{{ $field['name'] }}"
        value="{{ $field['options']['value'] ?? '' }}"
        class="form-control"
        placeholder="{{ $field['options']['placeholder'] }}"
        @if($field['options']['required']) required @endif
/>
<div class="form-text text-muted">{{ $field['options']['helper'] ?? '' }}</div>