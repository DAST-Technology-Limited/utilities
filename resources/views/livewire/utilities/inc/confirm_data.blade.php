
<style>
    .confirmation-warning {
  background-color: #f8d7da;
  border: 1px solid #f5c6cb;
  color: #721c24;
  padding: 10px;
  border-radius: 4px;
}
</style>
<!-- Modal -->
<div class="modal fade" id="airtimePurchase" tabindex="-1" aria-labelledby="airtimePurchaseLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content confirmation-warning" >
      <div class="modal-header">
        <h1 class="modal-title fs-5 text-dark" id="airtimePurchaseLabel">Confirmation</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-danger">
        Are you sure you want to purchase {{$data_list[$amount]["size"]}} {{strtoupper($network)}} at N{{$data_list[$amount]["discountAmount"]}} for {{$phone_number}}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button  class="btn btn-danger" data-bs-dismiss="modal">Yes, Continue</button>
      </div>
    </div>
  </div>
</div>