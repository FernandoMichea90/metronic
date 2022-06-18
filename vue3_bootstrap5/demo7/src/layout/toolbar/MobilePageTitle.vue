<template>
  <!--begin::Page title-->
  <div
    class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-2 pb-2 pb-lg-0"
    data-kt-swapper="true"
    data-kt-swapper-mode="prepend"
    data-kt-swapper-parent="{default: '#kt_content_container', lg: '#kt_header_container'}"
  >
    <!--begin::Heading-->
    <h1 class="text-dark fw-bolder my-0 fs-2">{{ title }}</h1>
    <!--end::Heading-->
    <!--begin::Breadcrumb-->
    <ul v-if="breadcrumbs" class="breadcrumb fw-bold fs-base my-1">
      <li class="breadcrumb-item text-muted">
        <router-link to="/dashboard" class="text-muted">
          Home
        </router-link>
      </li>
      <template v-for="(item, index) in breadcrumbs" :key="index">
        <li class="breadcrumb-item text-dark">
          {{ item }}
        </li>
      </template>
      <li class="breadcrumb-item text-dark">
        {{ title }}
      </li>
    </ul>
    <!--end::Breadcrumb-->
  </div>
  <!--end::Page title-->
</template>

<script lang="ts">
import { defineComponent } from "vue";

export default defineComponent({
  name: "mobile-page-title",
  components: {},
  props: {
    breadcrumbs: Array,
    title: String
  }
});
</script>
