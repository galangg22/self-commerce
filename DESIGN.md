---
name: Self-Commerce
colors:
  surface: '#121411'
  surface-dim: '#121411'
  surface-bright: '#383a36'
  surface-container-lowest: '#0d0f0c'
  surface-container-low: '#1a1c19'
  surface-container: '#1e201d'
  surface-container-high: '#292b27'
  surface-container-highest: '#333532'
  on-surface: '#e3e3de'
  on-surface-variant: '#c2c9bb'
  inverse-surface: '#e3e3de'
  inverse-on-surface: '#2f312e'
  outline: '#8c9387'
  outline-variant: '#42493e'
  surface-tint: '#a1d494'
  primary: '#a1d494'
  on-primary: '#0a3909'
  primary-container: '#2d5a27'
  on-primary-container: '#9dd090'
  inverse-primary: '#3b6934'
  secondary: '#ffb59e'
  on-secondary: '#5c1902'
  secondary-container: '#7d3117'
  on-secondary-container: '#ffa082'
  tertiary: '#cac6be'
  on-tertiary: '#32302a'
  tertiary-container: '#525049'
  on-tertiary-container: '#c6c2ba'
  error: '#ffb4ab'
  on-error: '#690005'
  error-container: '#93000a'
  on-error-container: '#ffdad6'
  primary-fixed: '#bcf0ae'
  primary-fixed-dim: '#a1d494'
  on-primary-fixed: '#002201'
  on-primary-fixed-variant: '#23501e'
  secondary-fixed: '#ffdbd0'
  secondary-fixed-dim: '#ffb59e'
  on-secondary-fixed: '#390b00'
  on-secondary-fixed-variant: '#7a2f15'
  tertiary-fixed: '#e7e2d9'
  tertiary-fixed-dim: '#cac6be'
  on-tertiary-fixed: '#1d1c16'
  on-tertiary-fixed-variant: '#494740'
  background: '#121411'
  on-background: '#e3e3de'
  surface-variant: '#333532'
typography:
  display-lg:
    fontFamily: Nunito Sans
    fontSize: 48px
    fontWeight: '800'
    lineHeight: 56px
    letterSpacing: -0.02em
  headline-lg:
    fontFamily: Nunito Sans
    fontSize: 32px
    fontWeight: '700'
    lineHeight: 40px
  headline-lg-mobile:
    fontFamily: Nunito Sans
    fontSize: 28px
    fontWeight: '700'
    lineHeight: 36px
  headline-md:
    fontFamily: Nunito Sans
    fontSize: 24px
    fontWeight: '600'
    lineHeight: 32px
  body-lg:
    fontFamily: Nunito Sans
    fontSize: 18px
    fontWeight: '400'
    lineHeight: 28px
  body-md:
    fontFamily: Nunito Sans
    fontSize: 16px
    fontWeight: '400'
    lineHeight: 24px
  label-md:
    fontFamily: Nunito Sans
    fontSize: 14px
    fontWeight: '600'
    lineHeight: 20px
    letterSpacing: 0.01em
  label-sm:
    fontFamily: Nunito Sans
    fontSize: 12px
    fontWeight: '700'
    lineHeight: 16px
    letterSpacing: 0.03em
rounded:
  sm: 0.25rem
  DEFAULT: 0.5rem
  md: 0.75rem
  lg: 1rem
  xl: 1.5rem
  full: 9999px
spacing:
  base: 8px
  xs: 4px
  sm: 12px
  md: 24px
  lg: 48px
  xl: 80px
  container-max: 1280px
  gutter: 24px
  margin-mobile: 16px
  margin-desktop: 40px
---

## Brand & Style
The brand personality is rooted in the concept of "Personalized & Empowering Commerce." It bridges the gap between the raw, organic feel of nature and the precise, professional efficiency of modern e-commerce. The goal is to make every user feel like an individual, not just a transaction.

The design style is **Modern Minimalism with Organic Accents**, optimized for a premium dark-mode experience. This approach utilizes deep, immersive backgrounds and clean layouts to provide a professional structure, while incorporating warm textures and soft edges to maintain an approachable, human-centric atmosphere. The interface should feel like a high-end, sustainable boutique at night—curated, intentional, and calm.

## Colors
The palette is inspired by natural landscapes at twilight, refined for a digital dark environment to reduce eye strain and emphasize premium quality.
- **Primary (Deep Forest):** A sophisticated green (#2d5a27) that conveys growth and stability. In dark mode, it acts as a vibrant anchor for key actions.
- **Secondary (Terracotta):** A warm, empowering earth tone (#d97757) used for highlights and accents, providing a human touch against the dark canvas.
- **Tertiary (Warm Parchment):** Used sparingly in dark mode for high-contrast accents or specialized containers (#f4efe6) to maintain the organic brand connection.
- **Neutral (Deep Obsidian):** A dark, desaturated base (#1a1c19) used for surfaces and backgrounds to ensure a focused, modern aesthetic.

## Typography
This design system utilizes **Nunito Sans** exclusively to maintain a friendly and approachable rhythm. To ensure a "professional" feel in the dark interface, we employ tight letter spacing on larger headings and high-contrast light text on dark backgrounds.

- **Headlines:** Use Bold and ExtraBold weights to create clear entry points.
- **Body Text:** Use Regular weight with generous line height (1.5x minimum) to ensure long-form product descriptions are readable and inviting.
- **Labels:** Use SemiBold or Bold in smaller sizes for UI metadata and navigation, ensuring they feel structured and intentional.

## Layout & Spacing
The layout follows a **Fluid Grid** model with a 12-column structure for desktop and a 4-column structure for mobile. 

- **Vertical Rhythm:** Built on an 8px base unit. 
- **Whiteboards:** Generous padding (lg and xl units) is used between major sections to emphasize the "Minimalist" aesthetic and allow products to breathe within the dark space.
- **Responsive Behavior:** On mobile, margins shrink to 16px to maximize real estate, while on desktop, they expand to 40px with a centered container to maintain a professional, editorial look.

## Elevation & Depth
In this dark theme, depth is achieved through **Tonal Layers** and **Subtle Inner Glows** rather than traditional heavy shadows.

- **Base Level:** The background uses the Neutral (Deep Obsidian) color.
- **Surface Level:** Product cards and containers use slightly lighter grey-greens (Surface Container levels) to pop against the deep background.
- **Shadows:** Use a "Soft Bloom" effect—low-opacity (12-20%) using the Primary color (Deep Forest) as a glow effect to define edges, providing modern depth without feeling muddy.
- **Interactive States:** Elements should feel tactile; when hovered, surface colors should lighten slightly and elements should scale slightly (1.02x) to evoke a physical response.

## Shapes
The shape language is **Rounded (Level 2)**. This specific curvature is chosen to feel organic and soft, yet structured enough for a professional commerce platform. 

- **Standard Elements:** Buttons, input fields, and tags use a 0.5rem (8px) radius.
- **Large Elements:** Product cards and featured banners use a 1rem (16px) radius.
- **Icons:** Should follow a "Soft Linear" style with rounded caps and joins to match the typography.

## Components
Consistent component styling is vital for the "Empowering" aspect of the brand within a dark UI.

- **Buttons:** Primary buttons are solid Deep Forest with white text. Secondary buttons use a Deep Forest outline with a subtle Terracotta hover state.
- **Cards:** Cards use tonal elevation (lighter surface colors) and the "Soft Bloom" glow. Content inside should be padded at 24px.
- **Input Fields:** Use a subtle dark-grey fill with a bottom-only border in Deep Forest for a modern feel that is visible yet unobtrusive in dark mode.
- **Chips & Tags:** Use high-roundedness (Pill) with low-opacity fills of the Secondary color to denote categories or personalized "For You" labels.
- **Progressive Disclosure:** Use accordion and drawer components for complex technical details to keep the primary interface clean and focused on personalization.