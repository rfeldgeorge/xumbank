<template>
    <ul class="nav nav-pills flex-column flex-md-row mb-3">
        <li class="nav-item">
            <a class="nav-link active" href="javascript:void(0);"><i class="bx bx-user me-1"></i> User</a>
        </li>
        <li class="nav-item" style="  margin-left: 12px;">
            <router-link class="nav-link" to="/update-profile"
            ><i class="bx bx-bell me-1"></i> Update Profile</router-link
            >
        </li>
        <li class="nav-item">
            <router-link class="nav-link" to="/settings"
            ><i class="bx bx-link-alt me-1"></i> Account Settings</router-link
            >
        </li>
    </ul>
</template>