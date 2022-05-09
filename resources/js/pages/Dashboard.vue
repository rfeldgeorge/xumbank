<template>
   <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
        <div class="col-lg-8 mb-4 order-0">
            <div class="card bg-transparent shadow-xl" style=" height: 12.8rem;  ">
            <div class="overflow-hidden position-relative border-radius-x2 d-flex align-items-start justify-content-between row" 
                style="background-image: url('backend/assets/img/backgrounds/curved14.jpg');">
                <div class="col-sm-6 position-relative z-index-1 p-3">
                <div class="card-body ">
                    <h5 class="card-title text-primary">Welcome Back John Cancelo</h5>
                    <p class="mb-4">Account Number <br><span>100120051</span> </p>
                    <small>Status</small> <br>
                    <span class=" text-success me-1"> Active</span> <br>
                    <!-- <a data-bs-toggle="modal" data-bs-target="#largeModal" class="btn btn-sm btn-outline-primary">Request Loan</a> -->
                </div>
                </div>
                <div class="col-sm-5 text-center text-sm-left">
                <div class="card-body pb-0 px-0 px-md-4">
                    <img
                    src="backend/assets/img/illustrations/man-with-laptop-light.png"
                    height="140"
                    alt="View Badge User"
                    data-app-dark-img="illustrations/man-with-laptop-dark.png"
                    data-app-light-img="illustrations/man-with-laptop-light.png"
                    />
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 order-1">
            <div class="row">
            <div class=" col-lg-12 col-md-12 col-12 mb-4">
                <div class="card bg-transparent shadow-xl" style="height: 12.8rem;">
                    <div class="card-body" style="background-image: url('backend/assets/img/backgrounds/white-curved.jpg');">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <img
                                    src="backend/assets/img/icons/unicons/wallet-info.png"
                                    alt="chart success"
                                    class="rounded"
                                />
                            </div>
                            <div class="dropdown">
                              <!-- <button
                                class="btn p-0"
                                type="button"
                                id="cardOpt3"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button> -->
                              <div class="dropdown-men dropdown-menu-end" aria-labelledby="cardOpt3">
                                <a class="dropdown-item mb-1" data-bs-toggle="modal" data-bs-target="#smallModal" href="">Transfer</a>
                                <router-link class="dropdown-item" to="/wire">Wire Transfer</router-link>
                              </div>
                            </div>
                        </div>
                        <div class="item-card d-flex">
                            <!-- <div class="col-6">
                                <span class="card-title mb-1">Cleared Balance</span>
                                <span class="card-title mb-2">$12,628,000.00</span>
                            </div> -->
                            <div class="col-6">
                                <span class="card-title">Available Balance</span>
                                <span class="card-title mb-2">$12,000.00</span>
                            </div>
                        </div>
                            
                        
                        <!-- <div class="account-card">
                            <p class="fw-semibold d-block mb-1">Account Number</p> 
                            <span class="card-title">100120051</span> 
                        </div> -->
                    </div>
                </div>
            </div>
            
            </div>
        </div>
        
        </div>
        <div class="row">
        <!-- Expense Overview -->
        <Table />
        <!--/ Expense Overview -->

        <!-- Transactions -->
        <SmallTable />
        <!--/ Transactions -->
        </div>
        <!-- Large Modal -->
        <div class="modal fade" id="largeModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel3">Request Loan</h5>
                <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
                ></button>
            </div>
            <div class="modal-body">
                <div class="row">
                <div class="col mb-3">
                    <label for="nameLarge" class="form-label">Name</label>
                    <input type="text" id="nameLarge" class="form-control" placeholder="Enter Name" />
                </div>
                </div>
                <div class="row g-2">
                <div class="col mb-0">
                    <label for="emailLarge" class="form-label">Email</label>
                    <input type="text" id="emailLarge" class="form-control" placeholder="xxxx@xxx.xx" />
                </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
        </div>
        <!-- small Modal -->
        <div class="modal fade" id="smallModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel2">Fund Transafer</h5>
                    <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                    ></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nameSmall" class="form-label">Account Number</label>
                            <input type="text" id="nameSmall" class="form-control" placeholder="Enter Account Number" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nameSmall" class="form-label">Amount</label>
                            <input type="text" id="nameSmall" class="form-control" placeholder="Enter Amount" />
                        </div>
                    </div>
                    <div class="row">
                    <div class="col mb-1">
                        <label for="nameSmall" class="form-label">Description</label>
                        <textarea type="text" id="nameSmall" class="form-control" placeholder="Reason for this tranaction" />
                    </div>
                    </div>
                    
                </div>
                    <div class="modal-footer">
                        <div class="d-grid gap-2 col-lg-6 mx-auto">
                        <button class="btn btn-primary btn-lg" type="button">Send</button>
                    </div>
                    </div>
                </div>
            </div>
            </div>
    </div>
</template>

<script>
import Dropdown from '../components/DropdownComponent.vue'
import Table from '../components/TableComponent.vue'
import SmallTable from '../components/SmallTableComponent.vue'
import Modal from '../components/ModalComponent.vue'
export default {
    mounted() {
        console.log('Component mounted.')
    },

    methods:{
        showModal(){
            this.showModal = true
        }
    },

    components:{
        Dropdown,
        Table,
        SmallTable,
        Modal
    }
}
</script>
