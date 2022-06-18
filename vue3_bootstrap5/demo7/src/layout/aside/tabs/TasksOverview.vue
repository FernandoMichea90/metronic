<template>
  <!--begin::Header-->
  <div class="card-header border-0 pt-5">
    <h3 class="card-title align-items-start flex-column">
      <span class="card-label fw-bolder text-dark">Tasks Overview</span>
    </h3>
  </div>
  <!--end::Header-->

  <!--begin::Body-->
  <div class="card-body pt-5">
    <template v-for="(item, index) in items" :key="index">
      <!--begin::Item-->
      <div
        :class="{ 'mb-7': items.length - 1 !== index }"
        class="d-flex align-items-center"
      >
        <!--begin::Symbol-->
        <div class="symbol symbol-50px me-5">
          <span :class="`bg-light-${item.color}`" class="symbol-label">
            <span
              :class="`svg-icon-${item.color}`"
              class="svg-icon svg-icon-2x"
            >
              <inline-svg :src="item.icon" />
            </span>
          </span>
        </div>
        <!--end::Symbol-->

        <!--begin::Text-->
        <div class="d-flex flex-column">
          <a href="#" class="text-dark text-hover-primary fs-6 fw-bolder">{{
            item.title
          }}</a>

          <span class="text-muted fw-bold">{{ item.description }}</span>
        </div>
        <!--end::Text-->
      </div>
      <!--end::Item-->
    </template>
  </div>
  <!--end::Body-->
</template>

<script lang="ts">
import { defineComponent } from "vue";

export default defineComponent({
  name: "kt-tasks-overview",
  components: {},
  setup() {
    const items = [
      {
        icon: "media/icons/duotone/Home/Library.svg",
        color: "success",
        title: "Project Briefing",
        description: "Project Manager"
      },
      {
        icon: "media/icons/duotone/Communication/Write.svg",
        color: "warning",
        title: "Concept Design",
        description: "Art Director"
      },
      {
        icon: "media/icons/duotone/Communication/Group-chat.svg",
        color: "primary",
        title: "Functional Logics",
        description: "Lead Developer"
      },
      {
        icon: "media/icons/duotone/General/Attachment2.svg",
        color: "danger",
        title: "Development",
        description: "DevOps"
      },
      {
        icon: "media/icons/duotone/Communication/Shield-user.svg",
        color: "info",
        title: "Testing",
        description: "QA Managers"
      },
      {
        icon: "media/icons/duotone/Interface/File-Upload.svg",
        color: "success",
        title: "HTML, CSS Coding",
        description: "Art Director"
      },
      {
        icon: "media/icons/duotone/Interface/Pie-04.svg",
        color: "danger",
        title: "ReactJS Developer",
        description: "Web, UI/UX Design"
      }
    ];

    return {
      items
    };
  }
});
</script>
