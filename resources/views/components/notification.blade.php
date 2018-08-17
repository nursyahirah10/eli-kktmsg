<b-notification :active="{{ session('flash') ? 'true' : 'false' }}" type="is-success" has-icon>
    {{ session('flash') ?? '' }}
</b-notification>

<b-notification :active="{{ session('flashWarning') ? 'true' : 'false' }}" type="is-warning" has-icon>
    {{ session('flashWarning') ?? '' }}
</b-notification>

<b-notification :active="{{ session('flashDanger') ? 'true' : 'false' }}" type="is-danger" has-icon>
    {{ session('flashDanger') ?? '' }}
</b-notification>