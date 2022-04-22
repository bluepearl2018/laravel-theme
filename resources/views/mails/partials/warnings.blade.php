<div style="border-top: solid 1px #cdcdcd; margin-top: 8px; padding: 0 4px;">
    @if(isset($user) && $user->account_deletion_request !== NULL)
        <p style="font-size: small;">--> Please note your account will be deleted on {{ $user->account_deletion_request }}</p>
    @endif
</div>
