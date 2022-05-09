<template>
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Wire</span> Transafer</h4>

        <!-- Basic Layout & Basic with Icons -->
        <div class="row">
        <!-- Basic Layout -->
        <!-- Merged -->
                <div class="col-md-12">
                  <div class="card mb-4">
                    <div class="card-body demo-vertical-spacing demo-only-element">
                      <div class="input-group input-group-merge">
                            <label class="input-group-text" for="inputGroupSelect01">Chosse Bank</label>
                            <select class="form-select" id="inputGroupSelect01">
                              <option selected></option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                            </select>
                      
                        <span class="input-group-text" id="basic-addon-search31">Can't your Bank ?</span>
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Enter Bank Name"
                          aria-label="Search..."
                          aria-describedby="basic-addon-search31"
                        />
                      </div>
                       <div class="input-group input-group-merge">
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Swift Code"
                          aria-label="Search..."
                          aria-describedby="basic-addon-search31"
                        />
                      </div>

                      <div class="input-group input-group-merge">
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Recipient's Account Number"
                          aria-label="Recipient's username"
                          aria-describedby="basic-addon33"
                        />
                        <span class="input-group-text" id="basic-addon33">100120051</span>

                        <span class="input-group-text" id="basic-addon34">Account Holder Name</span>
                        <input type="text" class="form-control" id="basic-url3" aria-describedby="basic-addon34" />
                      </div>
                      <div class="input-group input-group-merge">
                        <span class="input-group-text">Amount ($)</span>
                        <input
                          type="text"
                          class="form-control"
                          placeholder="100"
                          aria-label="Amount (to the nearest dollar)"
                        />
                        <span class="input-group-text">.00</span>
                        
                      </div>

                      <div class="input-group input-group-merge">
                        <span class="input-group-text">Description</span>
                        <textarea class="form-control" aria-label="Description"></textarea>
                      </div>
                      <div class="input-group input-group-merge">
                       <button type="button" class="btn btn-primary">Send Wire</button>
                      </div>
                    </div>
                  </div>
                </div>

        </div>
        <!-- Modal Scroll long content -->
            <div class="col-lg-4 col-md-3">
                <!-- Modal -->
                <div class="modal fade" id="modalLong" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalLongTitle">Terms of use</h5>
                        <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                        ></button>
                    </div>
                    <div class="modal-body">
                        <p>
                        Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis
                        in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                        </p>
                        <p>
                        Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis
                        lacus vel augue laoreet rutrum faucibus dolor auctor.
                        </p>
                        <p>
                        Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                        scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus
                        auctor fringilla.
                        </p>
                        <p>
                        Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis
                        in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                        </p>
                        <p>
                        Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis
                        lacus vel augue laoreet rutrum faucibus dolor auctor.
                        </p>
                        <p>
                        Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                        scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus
                        auctor fringilla.
                        </p>
                        <p>
                        Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis
                        in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                        </p>
                        <p>
                        Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis
                        lacus vel augue laoreet rutrum faucibus dolor auctor.
                        </p>
                        <p>
                        Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                        scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus
                        auctor fringilla.
                        </p>
                        <p>
                        Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis
                        in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                        </p>
                        <p>
                        Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis
                        lacus vel augue laoreet rutrum faucibus dolor auctor.
                        </p>
                        <p>
                        Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                        scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus
                        auctor fringilla.
                        </p>
                        <p>
                        Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis
                        in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                        </p>
                        <p>
                        Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis
                        lacus vel augue laoreet rutrum faucibus dolor auctor.
                        </p>
                        <p>
                        Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                        scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus
                        auctor fringilla.
                        </p>
                        <p>
                        Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis
                        in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                        </p>
                        <p>
                        Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis
                        lacus vel augue laoreet rutrum faucibus dolor auctor.
                        </p>
                        <p>
                        Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                        scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus
                        auctor fringilla.
                        </p>
                    </div>
                    </div>
                </div>
                </div>
            </div>
    </div>
</template>