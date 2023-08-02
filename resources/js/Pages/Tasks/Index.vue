<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import TaskCreate from '@/Pages/Tasks/Partials/TaskCreate.vue';
import TaskInfo from '@/Pages/Tasks/Partials/TaskInfo.vue';
import TaskList from '@/Pages/Tasks/Partials/TaskList.vue';
import Pagination from '@/Components/Pagination.vue';
</script>

<template>
    <GuestLayout>
        <div class="flex flex-col gap-4">
            <h1 class="text-xl font-semibold">My tasks</h1>
            <TaskCreate />
            <TaskInfo />
            <TaskList />
            <Pagination :links="$page.props.tasks.meta.links" />
        </div>
    </GuestLayout>
</template>