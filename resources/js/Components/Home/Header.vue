<script setup>
import { HeartIcon } from 'lucide-react';
</script>
<template>
    <div>
        <div>
            <h2>Icon</h2>
        </div>
        <div class="flex flex-row">
            <h3>
                {{ $t('home.home') }}
            </h3>
            <h3>
                {{ $t('home.shop') }}
            </h3>
            <h3>
                {{ $t('home.page.plural') }}
            </h3>
            <h3>
                {{ $t('home.contact.plural') }}
            </h3>
        </div>
        <div>
            <HeartIcon/>
        </div>
    </div>
</template>
