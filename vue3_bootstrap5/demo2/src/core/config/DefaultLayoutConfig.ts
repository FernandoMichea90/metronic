import LayoutConfigTypes from "@/core/config/LayoutConfigTypes";

const config: LayoutConfigTypes = {
  themeName: "Metronic",
  themeVersion: "8.0.22",
  demo: "demo2",
  main: {
    type: "default",
    primaryColor: "#009EF7",
    logo: {
      dark: "media/logos/logo-1.svg",
      light: "media/logos/logo-1-dark.svg"
    }
  },
  loader: {
    logo: "media/logos/logo-1-dark.svg",
    display: true,
    type: "default"
  },
  scrollTop: {
    display: true
  },
  header: {
    display: true,
    menuIcon: "font",
    width: "fixed",
    fixed: {
      desktop: true,
      tabletAndMobile: true
    }
  },
  toolbar: {
    display: true,
    width: "fixed",
    fixed: {
      desktop: true,
      tabletAndMobile: true
    }
  },
  aside: {
    display: false,
    theme: "dark",
    fixed: true,
    menuIcon: "svg",
    minimized: false,
    minimize: true,
    hoverable: true
  },
  content: {
    width: "fixed"
  },
  footer: {
    width: "fixed"
  }
};

export default config;
