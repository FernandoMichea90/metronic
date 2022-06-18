import {
  MenuComponent,
  DrawerComponent,
  ScrollComponent,
  ScrollTopComponent,
  StickyComponent,
  ToggleComponent
} from "@/assets/ts/components";

/**
 * Initialize KeenThemes custom components
 */
setTimeout(() => {
  ToggleComponent.bootstrap();
  ScrollTopComponent.bootstrap();
  DrawerComponent.bootstrap();
  StickyComponent.bootstrap();
  MenuComponent.bootstrap();
  ScrollComponent.bootstrap();
}, 200);
