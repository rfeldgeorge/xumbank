<template>
    <div class="container-xxl flex-grow-1 container-p-y">
         <div class="row">
            <div class="col-md-12">
               <TabLinks />
                <div class="card mb-4">
                <h5 class="card-header">Profile Details</h5>
                <!-- Account -->
                <UpdatePhoto />
                <hr class="my-0" />
                <div class="card">
                        <!-- Notifications -->
                        <h5 class="card-header">User Informations</h5>
                        <div class="card-body">
                        <!-- <span
                            >We need permission from your browser to show notifications.
                            <span class="notificationRequest"><strong>Request Permission</strong></span></span
                        > -->
                        <div class="error"></div>
                        </div>
                        <div class="table-responsive">
                        <table class="table table-striped table-borderless border-bottom">
                            <tbody>
                            <tr>
                                <td class="text-nowrap">Full Name</td>
                                <td>
                                <div class=" text-nowrap">John Lean </div>
                                </td> 
                            </tr>
                            </tbody>
                        </table>
                        </div>
                        <!-- /Notifications -->
                    </div>
                <!-- /Account -->
                </div>
                <div class="card">
                <h5 class="card-header">Delete Account</h5>
                <div class="card-body">
                    <div class="mb-3 col-12 mb-0">
                    <div class="alert alert-warning">
                        <h6 class="alert-heading fw-bold mb-1">Are you sure you want to delete your account?</h6>
                        <p class="mb-0">Once you delete your account, there is no going back. Please be certain.</p>
                    </div>
                    </div>
                    <form id="formAccountDeactivation" onsubmit="return false">
                    <div class="form-check mb-3">
                        <input
                        class="form-check-input"
                        type="checkbox"
                        name="accountActivation"
                        id="accountActivation"
                        />
                        <label class="form-check-label" for="accountActivation"
                        >I confirm my account deactivation</label
                        >
                    </div>
                    <button type="submit" class="btn btn-danger deactivate-account">Deactivate Account</button>
                    </form>
                </div>
                </div>
            </div>
        </div>
        
       
    </div>
</template>

<script>
import UpdatePhoto from '../components/UpdatePhoto.vue'
import TabLinks from '../components/TabLinks.vue'

export default {
    
    components:{
        UpdatePhoto,
        TabLinks
    }
}
</script>