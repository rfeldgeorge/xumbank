<template>
    <div class="col-md-6 col-lg-4 order-2 mb-4">
        <div class="card h-100">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="card-title m-0 me-2">Transactions</h5>
            <div class="dropdown">
                <button
                class="btn p-0"
                type="button"
                id="cardOpt3"
                data-bs-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
                >
                <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <ul class="p-0 m-0">
                <li class="d-flex mb-4 pb-1">
                    <div class="avatar flex-shrink-0 me-3">
                    <img src="backend/assets/img/icons/unicons/cc-success.png" alt="User" class="rounded" />
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                    <div class="me-2">
                        <small class="text-muted d-block mb-1">Credit Card</small>
                        <h6 class="mb-0">Ordered Food</h6>
                    </div>
                    <div class="user-progress d-flex align-items-center gap-1">
                        <h6 class="mb-0">-838.71</h6>
                        <span class="text-muted">USD</span>
                    </div>
                    </div>
                </li>
            </ul>
        </div>
        </div>
    </div>
</template>