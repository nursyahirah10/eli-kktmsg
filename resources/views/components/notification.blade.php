<b-notification :active="{{ session('flash') ? 'true' : 'false' }}" type="is-success" has-icon>
    {{ session('flash') ?? '' }}
</b-notification>