<div class="modal-content">
  <div class="modal-header border-0">
    <h5 class="modal-title fw-bold">User Data</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
    </button>
  </div>
  <div class="modal-body">
    <div class="d-flex">
      <div>
        <b>Name:</b> <span id="user_name">{{ $user_data->name }}</span> <br>
        <b>Email:</b> <span id="user_email">{{ $user_data->email }}</span> <br>
        <b>Account Type:</b>
        @if ($user_data->user_type == 1)
          <span id="user_acc_type">Sub Admin</span>
        @elseif ($user_data->user_type == 2)
          <span id="user_acc_type">User</span>
        @endif
        <br>
      </div>
    </div>
  </div>
</div>