# Design System — Umbrella Corporation

> *"Our business is life itself."*
> *"Obedience breeds discipline. Discipline breeds unity. Unity breeds power. Power is life."*

Sistema de diseño basado en la identidad visual real de Umbrella Corporation (Resident Evil / Capcom, 1996–presente). Colores extraídos directamente del logo oficial; tipografías documentadas en la franquicia.

---

## 🎨 Paleta de Colores (extraída del logo oficial)

Los siguientes valores HEX provienen de un análisis directo del logo oficial de Umbrella Corporation, ignorando antialiasing y sombras suaves.

| Token | Nombre | HEX | RGB | Rol |
|-------|--------|-----|-----|-----|
| `--umbrella-red` | Cherry Red | `#ED1C24` | `237, 28, 36` | **Color primario.** Rojo principal del logo. CTAs, énfasis crítico, marca. |
| `--crimson-shadow` | Indian Red | `#830F14` | `131, 15, 20` | Rojo oscuro de sombra/profundidad del logo. Hover states, gradientes, texto destacado sobre fondo claro. |
| `--obsidian-brown` | Dark Brown | `#2F1B15` | `47, 27, 21` | Casi-negro cálido. Fondos oscuros, tipografía principal sobre claro, paneles corporativos. |
| `--slate-steel` | Slate Grey | `#5D6E6E` | `93, 110, 110` | Gris medio frío. Bordes, divisores, iconografía secundaria, instrumentación. |
| `--cool-grey` | Cool Grey | `#9CACAD` | `156, 172, 173` | Gris claro estéril. Texto secundario, fondos de tarjetas, superficies de laboratorio. |

> 💡 **Color complementario obligatorio:** blanco puro `#FFFFFF` — el logo de Umbrella es **oficialmente rojo + blanco** alternados en 8 segmentos. Usar como contraparte de `--umbrella-red`.

### Aplicación recomendada

- **Marca pura** → `--umbrella-red` + `#FFFFFF` (la combinación canónica del paraguas)
- **Modo oscuro** → fondo `--obsidian-brown`, texto `--cool-grey`, acento `--umbrella-red`
- **Modo claro / clínico** → fondo `#FFFFFF`, texto `--obsidian-brown`, acento `--umbrella-red`
- **Profundidad** → degradar entre `--umbrella-red` y `--crimson-shadow` (igual que el gradiente radial del logo real)

---

## 🔤 Tipografías

### 1. Eurostile Bold Extended — *Display / Wordmark*
**Diseñador:** Aldo Novarese (Italia, 1962)
La fuente más consistentemente citada como base del wordmark "UMBRELLA CORPORATION". Sans-serif geométrica, ancha, con ese aire futurista-corporativo de los años 60–70 que define la estética visual de la compañía.

- **Pesos:** Bold Extended, Black Extended
- **Uso:** Logo, H1, banners institucionales, señalización
- **Alternativa libre (Google Fonts):** **Michroma** o **Chakra Petch** (mantienen el carácter tecnológico extendido)
- **Fallback:** `'Eurostile Extended', 'Bank Gothic', 'Microgramma', sans-serif`

### 2. Helvetica Black — *Corporate Body*
**Diseñador:** Max Miedinger & Eduard Hoffmann (Suiza, 1957)
La otra fuente recurrentemente citada en el material gráfico de Umbrella, especialmente en documentos internos y comunicación corporativa. Sans-serif neutra y autoritaria — la voz oficial de cualquier multinacional.

- **Pesos:** Regular, Bold, Black
- **Uso:** Cuerpo de texto, UI, tablas, formularios, navegación
- **Alternativa libre (Google Fonts):** **Inter** o **Archivo Black** (para el peso Black)
- **Fallback:** `'Helvetica Neue', 'Arial', sans-serif`

### 3. Special Elite — *Typewriter / Documents*
**Inspiración:** la icónica máquina de escribir que aparece en toda la saga Resident Evil como sistema de guardado, junto con los documentos clasificados, archivos médicos y notas de investigadores que aparecen dentro del juego.

- **Pesos:** Regular
- **Uso:** Documentos internos, archivos clasificados, notas de laboratorio, easter eggs, fechas/IDs de muestras
- **Alternativa libre (Google Fonts):** **Special Elite** (gratuita), **Courier Prime**
- **Fallback:** `'Courier New', 'American Typewriter', monospace`

---

## 🧩 Variables CSS

```css
:root {
  /* Colores oficiales extraídos del logo */
  --umbrella-red:    #ED1C24;
  --crimson-shadow:  #830F14;
  --obsidian-brown:  #2F1B15;
  --slate-steel:     #5D6E6E;
  --cool-grey:       #9CACAD;
  --pure-white:      #FFFFFF;

  /* Tipografías */
  --font-display: 'Eurostile Extended', 'Michroma', 'Bank Gothic', sans-serif;
  --font-body:    'Helvetica Neue', 'Inter', 'Arial', sans-serif;
  --font-mono:    'Special Elite', 'Courier Prime', 'Courier New', monospace;

  /* Tamaños base */
  --fs-h1: 3rem;
  --fs-h2: 2rem;
  --fs-body: 1rem;
  --fs-small: 0.875rem;
}

/* Importar alternativas libres desde Google Fonts */
@import url('https://fonts.googleapis.com/css2?family=Michroma&family=Inter:wght@400;700;900&family=Special+Elite&display=swap');
```

---

## 📐 Principios de Diseño

1. **Autoridad fría** — Espaciado generoso, jerarquía clara, ningún elemento decorativo gratuito.
2. **Contraste binario** — Rojo + blanco / rojo + negro. Sin gradientes suaves entre colores no relacionados; las transiciones son nítidas.
3. **Modularidad clínica** — Grids estrictos, bordes definidos, esquinas rectas o ligeramente redondeadas (máx. 4px).
4. **Iconografía simbólica** — El paraguas octagonal de 8 segmentos como marca recurrente; iconos de línea fina, nunca ilustraciones orgánicas.
5. **Tipografía como señal** — Eurostile en mayúsculas para títulos institucionales, Helvetica para cuerpo, máquina de escribir SOLO para "documentos clasificados" (no abusar).

---

## ⚠️ Estados y Niveles de Seguridad

| Nivel | Color | Uso |
|-------|-------|-----|
| **CRITICAL / BIOHAZARD** | `--umbrella-red` `#ED1C24` | Alertas máximas, errores fatales, contención fallida |
| **RESTRICTED** | `--crimson-shadow` `#830F14` | Acceso restringido, advertencias serias |
| **NOMINAL** | `--slate-steel` `#5D6E6E` | Operación normal, información secundaria |
| **STANDBY** | `--cool-grey` `#9CACAD` | Estado en espera, datos inactivos |
| **CLASSIFIED** | `--obsidian-brown` `#2F1B15` | Sobre fondos claros, máxima jerarquía textual |

---

## 🔬 Fuentes

- **Colores:** análisis directo del logo oficial mediante herramienta de extracción (whatthelogo.com).
- **Tipografías:** Eurostile Bold Extended y Helvetica Black están consistentemente citadas en la documentación tipográfica fan/comunidad como las fuentes base del wordmark.
- **Lore:** el paraguas oficial está formado por **8 segmentos triangulares alternos rojo/blanco** dispuestos en octágono, basado en el símbolo octogonal hallado por Oswell E. Spencer y Mother Miranda (canónico en *Resident Evil Village*).

---

*Property of Umbrella Corporation. Unauthorized reproduction is strictly prohibited.*
