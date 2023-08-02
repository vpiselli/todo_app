<script setup>
import { Link } from '@inertiajs/vue3';

const props = defineProps({
    links: Object
});
</script>

<template>
    <div class="flex gap-2 text-sm">
        <Link
            v-for="link, index in links"
            :key="index"
            :href="link.url ?? ''"
            v-html="link.label"
            :class="link.active ? 'text-red-400' : ''"
        />
    </div>
</template>