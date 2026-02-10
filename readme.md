# Indiveo oEmbed WordPress Plugin

Een eenvoudige WordPress plugin die Indiveo video's toevoegt als oEmbed provider. Hierdoor kun je Indiveo video URL's direct plakken in je WordPress content en worden deze automatisch omgezet naar ingesloten video's.

## Beschrijving

De Indiveo oEmbed plugin maakt het embedden van video's via de oEmbed-standaard eenvoudig. Plaats simpelweg een oEmbed-compatibele URL in je content en WordPress zet dit automatisch om naar een ingesloten video.

**Belangrijkste kenmerken:**
- ✅ Eenvoudige video-embeds via oEmbed
- ✅ Geen extra instellingen vereist
- ✅ Werkt automatisch na activatie
- ✅ Minimale footprint - geen overhead
- ✅ Compatible met WordPress 6.8 en hoger

Deze plugin voegt geen extra functionaliteit toe en heeft geen instellingen; het is puur bedoeld om oEmbed te ondersteunen of te forceren bij thema's of installaties die dit standaard niet doen.

## Vereisten

- **WordPress:** 6.1 of hoger
- **PHP:** Standaard WordPress PHP vereisten
- **Getest tot:** WordPress 6.8.3

## Installatie

### Handmatige installatie

1. **Download de plugin:**
   ```bash
   # Download of kopieer de plugin bestanden naar:
   /wp-content/plugins/indiveo-oembed-wp/
   ```

2. **Activeer de plugin:**
   - Ga naar je WordPress admin dashboard
   - Navigeer naar `Plugins` → `Geïnstalleerde Plugins`
   - Zoek "Indiveo oEmbed" en klik op "Activeren"

3. **Begin met gebruiken:**
   - Plaats een Indiveo video URL in je bericht of pagina
   - De URL wordt automatisch omgezet naar een ingesloten video

### Via WordPress Admin

1. Upload de `indiveo` map naar `/wp-content/plugins/`
2. Activeer de plugin via het 'Plugins'-menu in WordPress
3. Plaats een oEmbed-compatibele video-URL in je bericht of pagina

## Gebruik

### Video's embedden

1. **In de Block Editor (Gutenberg):**
   - Voeg een nieuwe paragraaf toe
   - Plak de volledige Indiveo URL
   - WordPress herkent automatisch de URL en toont de video

2. **In de Classic Editor:**
   - Plak de Indiveo URL op een eigen regel
   - De URL wordt automatisch omgezet naar een embed

3. **Ondersteunde URL formaten:**
   - URLs die matchen met het patroon: `https://indiveo.services/embed/*`
   - De plugin gebruikt het oEmbed endpoint: `https://indiveo.services/oembed`

### Veelgestelde vragen

#### Hoe embed ik een video?
Plak gewoon een Indiveo URL (zoals `https://indiveo.services/embed/video123`) op een eigen regel in je WordPress editor. De URL wordt automatisch omgezet naar een videospeler.

#### Werkt dit in alle WordPress editors?
Ja, de plugin werkt in zowel de Block Editor (Gutenberg) als de Classic Editor. Zorg er alleen voor dat de URL op een eigen regel staat.

#### Kan ik de video-instellingen aanpassen?
De plugin biedt geen eigen instellingen. De weergave van de video wordt bepaald door de Indiveo service en je WordPress thema's styling.

#### Werkt dit met page builders?
Ja, zolang je page builder oEmbed ondersteunt. De meeste moderne page builders zoals Elementor, Beaver Builder en Divi ondersteunen dit.

#### Wat als de video niet wordt weergegeven?
- Controleer of de URL correct begint met `https://indiveo.services/embed/`
- Zorg dat de URL op een eigen regel staat (niet als hyperlink)
- Controleer of de plugin geactiveerd is
- Probeer de pagina te verversen

## Veelgestelde vragen

### Wat doet deze plugin precies?

De plugin zorgt ervoor dat je eenvoudig video's kunt embedden via de oEmbed-standaard, zonder extra instellingen.

### Werkt dit ook voor andere media dan video?

Ja, oEmbed kan ook gebruikt worden voor andere media (afhankelijk van de provider), maar het hoofddoel van deze plugin is video-embedden.

### Zijn er instellingen die ik moet configureren?

Nee, de plugin werkt direct na activatie. Er zijn geen instellingenpagina's of configuratie opties.

### Waarom zie ik mijn video niet?

- Controleer of de URL correct is en begint met `https://indiveo.services/embed/`
- Zorg ervoor dat de URL op een eigen regel staat (niet in een linkje)
- Probeer de pagina te refreshen
- Controleer of de plugin correct is geactiveerd

## Technische details

### Bestanden
- `indiveo.php` - Hoofdplugin bestand met oEmbed provider registratie
- `readme.txt` - WordPress plugin repository readme
- `readme.md` - Deze documentatie

### Hoe het werkt

De plugin gebruikt WordPress' ingebouwde oEmbed functionaliteit door een nieuwe provider te registreren:

**Provider details:**
- **URL patroon:** `https://indiveo.services/embed/*`
- **oEmbed endpoint:** `https://indiveo.services/oembed`

### WordPress Hooks

De plugin gebruikt de volgende WordPress hooks:
- `init` - Om de oEmbed provider te registreren bij WordPress initialisatie

### Compatibiliteit

- **WordPress:** 6.8+
- **PHP:** Alle door WordPress ondersteunde versies
- **Thema's:** Werkt met alle WordPress thema's
- **Page Builders:** Compatible met populaire page builders die oEmbed ondersteunen

## Probleemoplossing

### Video wordt niet weergegeven
1. Controleer of de URL correct is geformatteerd
2. Zorg ervoor dat de URL op een eigen regel staat
3. Controleer of de plugin is geactiveerd
4. Test met een andere Indiveo video URL

### Plugin conflicten
- De plugin is zeer minimaal en zou geen conflicten moeten veroorzaken
- Bij problemen, deactiveer andere media/embed plugins tijdelijk om te testen

## Changelog

### Versie 1.0.0
- ✅ Eerste release
- ✅ Eenvoudige oEmbed-ondersteuning voor Indiveo video's
- ✅ Automatische URL herkenning en omzetting

## Licentie

Deze plugin volgt de standaard WordPress/GPL licentie voorwaarden.

## Ondersteuning

**Ontwikkelaar:** Indiveo  
**Website:** https://indiveo.nl  
**Plugin URI:** https://indiveo.nl

Voor vragen en ondersteuning:
1. Controleer eerst deze documentatie
2. Test of de Indiveo service bereikbaar is
3. Controleer WordPress debug logs bij problemen

---

*Deze plugin is ontwikkeld door Indiveo voor eenvoudige video-integratie in WordPress websites.*