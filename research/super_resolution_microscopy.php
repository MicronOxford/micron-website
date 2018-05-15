<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html lang="en-GB">

<head>
  <title>Micron Oxford Advanced Bioimaging: Structured Illumination Microscopy</title>
  <meta name=description content="Localization microscopy">
  <meta name=keywords content="structured illumination super-resolution microscopy advanced bioimaging">
  <meta http-equiv="Content-Type" CONTENT="text/html; charset=UTF-8">
  <link rel="stylesheet" type="text/css" href="../styles/main.css" >
  <link rel="icon" type="image/ico" href="../images/MicronMu.ico" >

</head>

<body id="research">
  <div id="container_all">
    <?php include "../headnav.html"; ?>
    <div id="mainbody"> 

    <h2>A Short Introduction to Super-Resolution Microscopy</h2>
    <p>by J. Demmerle, C. Eggeling & L. Schermelleh</p>
    <br/>
    <p>
      The past decade has seen a number of exciting new fluorescence imaging
      techniques emerge, many of which fall under the umbrella of
      "Super-Resolution Microscopy" or "Optical Nanoscopy". At
      <a href="../">Micron Oxford</a>†
      and the <a href="http://www.imm.ox.ac.uk/wolfson-imaging-centre-oxford">Wolfson Imaging Centre Oxford</a>††
      we work to advance these techniques and to bridge the gap between
      complex technical developments and their biological applications in
      order to make cutting-edge imaging accessible to researchers in Oxford
      and beyond.
    </p>
    <p>
      If you are a novice in the field you may ask:
    </p>
    <ul>
      <li>What are the differences between the seemingly endless array of techniques and acronyms in the super-resolution field?</li>
      <li>What are the relative strengths and weaknesses of different approaches? </li>
      <li>How would my research benefit? </li>
      <li>Which technique is most applicable for my question? </li>
    </ul>
    <p>
      In this introduction we will give a brief overview of the state of the field, and address some pros and cons of each method.
    </p>

    <h4>The Limits of Focused Light</h4>
    <p>
      Optical microscopy is one of the most versatile tools in a biologist's
      arsenal, since it allows the observation of the interior of 3D preserved
      fixed or living cell with minimal perturbation. However, from its
      invention in the 17th century until a few decades ago its spatial
      resolution was constrained by a seemingly impenetrable barrier: the
      diffraction limit. Simply put, the minimal distance at which two adjacent
      objects can still be discerned equals the wavelength used to observe
      them divided by twice the numerical aperture (NA) of the microscope
      (the NA roughly expresses the focusing strength of the microscope's
      objective lens). With visible light, the smallest practical wavelength
      is around 450 nm (blue emission), and the largest NA possible is
      around 1.4.
    </p>
    <p>
      Even with advances such as confocal microscopy and deconvolution
      algorithms, only biological structures separated by more than about
      200 nm in the lateral dimension (x and y axis) could be discerned.
      Resolution along the axial dimension (z axis) is even lower, being
      limited to roughly the wavelength of the emitted light, or 500 nm at
      best. Further, these values are only theoretical limits under optimal
      optical conditions. The effective resolution for typical biological
      samples is significantly decreased due to distortions from the sample
      itself such as light scattering, out-of-focus blur, spherical
      aberration, and poor signal-to-noise ratios.
    </p>

    <h4>Breaking the Diffraction Barrier – A Menagerie of Options</h4>

    <p>
      Imaging with sub-diffraction spatial resolution was postulated in the
      early 20th century, and while significant theoretical advances were
      made starting in the late 70's, it was not until the mid-90's when
      the first approaches for truly circumventing the diffraction barrier
      were implemented, and only in the last decade have these super-resolution
      technologies become available to the average researcher. Based on their
      different underlying principles these methods may be grouped into:
    </p>
    <ol>
      <li>structured illumination microscopy (SIM);</li>
      <li>targeted photoswitching microscopy such as <i>stimulated emission depletion</i> (STED) or <i>reversible switchable optical fluorescence transition</i> (RESOLFT) microscopy;</li>
      <li>localization microscopy such as (direct) <i>stochastic optical reconstruction microscopy </i>((d)STORM) or <i>(fluorescence) photoactivated localization microscopy </i>((F)PALM).</li>
    </ol>

    <h3>Using Moiré Interference: Structured Illumination Microscopy (SIM)</h3>
    <p>
      Super-resolution 3D-structured illumination microscopy (3D-SIM) works
      by the interaction of a high frequency three-dimensionally modulated
      illumination pattern with high frequency variations in the sample
      fluorescence caused by very small structures. This entails a lower
      frequency Moiré interference pattern that contains otherwise
      non-resolvable structural information encoded into the observed image.
      By imaging a series of these Moiré patterns in different positions and
      subsequent computational post-processing, the sub-diffraction sample
      information can be algorithmically decoded and reconstructed. By
      including information from above and below the focal plane both
      lateral and axial resolution is improved.
    </p>

    <figure>
      <img src="../images/Fig1_SIM.png" width="800 px"/>
      <figcaption>
        The principle of structured illumination microscopy is based on the
        Moiré effect generated when interfering a fine-striped pattern of
        excitation with sub-diffraction features in the sample emission. The
        SI pattern needs to be shifted and rotated to reconstruct
        super-resolution information from all spatial directions
        (adapted from Schermelleh et al., 2010).
      </figcaption>
    </figure>

    <dl>
      <dt>Resolution</dt>
      <dd>
        Two-fold improvement in x-y plane and along the z-axis (equivalent to
        an eight-fold volumetric improvement). With a 1.4 NA objective and
        depending on the wavelength 100-130 nm (xy) and 280-350 nm (z) can
        be achieved.
      </dd>

      <dt>Pros</dt>
      <dd>
        <ul class="researchlist">
          <li>SIM can be used with conventional fluorophores (e.g., DAPI, Alexa, ATTO, GFP, YFP, etc.)</li>
          <li>Very high sensitivity using EMCCD camera detection.</li>
          <li>Massive contrast improvement (~3000-fold compared to wide-field).</li>
          <li>3D sectioning over 10 µm into a sample (ideal for cultured cells).</li>
          <li>Fast pattern generation (OMX Blaze) and rapid image collection (e.g., by using recently developed sCMOS cameras) enable very high imaging speed and are suitability for live-cell imaging.</li>
          <li>Fast recording of a large field-of-view (e.g. a whole cell).</li>
        </ul>
      </dd>

      <dt>Cons</dt>
      <dd>
        <ul class="researchlist"> 
          <li>Only moderate lateral resolution improvement compared to other methods.</li>
          <li>Errors in system calibration, refractive index mismatch and/or poor sample quality can induce artifacts and severely compromise resolution.</li>
        </ul>
      </dd>

      <dt>Applications</dt>
      <dd>
        <ul class="researchlist"> 
          <li>Multicolor imaging of 3D structures with large field-of-view, e.g. cytoskeletal networks; centrosomes; nuclear organization within whole cells.</li>
          <li>Live-cell applications.</li>
          <li>Proper labeling contrast and meticulous optical aberration correction are of utmost importance.</li>
        </ul>
      </dd>
    </dl>

    <h3>The Targeted (Photoswitching) Readout: STED Microscopy</h3>
    <p>
      Stimulated emission depletion (STED) microscopy was the first optical
      super-resolution microscopy technique that increased the spatial
      resolution of fluorescence microscopy by a large factor; in principle
      it can reach resolution at the molecular scale. STED uses stimulated
      emission to inhibit fluorescence emission at predefined sample
      coordinates such that adjacent features emit sequentially in time.
      Typically, a laser beam inducing stimulated emission and featuring
      at least one zero-intensity point is overlaid with a regularly
      focused excitation beam confining the effective fluorescence signal
      to sub-diffraction dimensions. A common design is a doughnut-shaped
      focal intensity pattern of the STED beam. Scanning the co-aligned
      excitation and STED beams through the sample yields the final
      sub-diffraction resolution image, whereby the resolution can be
      adjusted by the intensity of the STED beam. Similarly, other
      fluorescence inhibition processes may be used to overcome the
      diffraction barrier, as long as two distinct transient states of
      fluorescence emission (e.g., a dark and a bright one) can be prepared.
      This can for example be achieved by ground-state depletion (GSD) or
      the use of photoswitchable fluorescence markers in the generalized
      concept called RESOLFT.
    </p>

    <figure>
      <img src="../images/Fig_3_STED.jpg" width="800 px"/>
      <figcaption>
        STED microscopy is based on stimulated emission depletion of a
        targeted region surrounding the excitation spot of apoint scanning
        laser beam. This leaves only a small sub-diffraction sized read-out
        area of emitted fluorescence to bedetected by a photomultiplier or
        photodiode (adapted from Schermelleh et al., 2010).
      </figcaption>
    </figure>

    <dl>
      <dt>Resolution</dt>
      <dd>
        If the resolution of STED is in principle unlimited, in reality the
        resolution is determined by the sophistication of the laser and the
        photophysical properties of the dyes. Current commercial setups
        achieve a lateral resolution of 50-80 nm with an axial resolution
        in the 500-800 nm range, equal to the conventional confocal axial
        resolution. The best lateral spatial resolutions achieved
        experimentally so far are 5 nm in solid states, 20 nm in fixed
        samples, 30-50 nm in living cells, and around 60 nm in 3D
        applications.
      </dd>

      <dt>Pros</dt>
      <dd>
        <ul class="researchlist">
          <li>"What you see is what you get" - no algorithms required</li>
          <li>High lateral resolution.</li>
          <li>Can image over 20 µm deep into the sample.</li>
          <li>Can be combined with "conventional" confocal imaging modalities.</li>
          <li>The resolution can be tuned.</li>
          <li>Can be combined with single-molecule techniques such as fluorescence-correlation-spectroscopy (STED-FCS) to measure fast molecular dynamics.</li>
          <li>STED/RESOLFT currently provides the fastest sub-diffraction resolution recordings of small fields of view.</li>
        </ul>
      </dd>

      <dt>Cons</dt>
      <dd>
        <ul class="researchlist"> 
          <li>Fluorophore options are limited: two colors only, and UV is not an option.</li>
          <li>STED requires high laser intensities energies, thus photobleaching/phototoxicity can be a problem. Advanced techniques such as RESOLFT can avoid this problem.</li>
          <li>Speed scales with the scan size and can become relative slow for large field-of-views. In theory, techniques such as SSIM or parallelized RESOLFT can avoid this, but are not yet commercially viable.</li>
          <li>Currently available commercial instruments are not yet optimal for 3D and live-cell imaging of larger objects.</li>
        </ul>
      </dd>

      <dt>Applications</dt>
      <dd>
        <ul class="researchlist"> 
          <li>Current commercial instruments are ideal for distinct structural features with little z-extension, e.g. vesicles; membranes; synaptic behavior.</li>
          <li>Bright labeling and the right choice of dyes are critical.</li>
        </ul>
      </dd>
    </dl>

    <h3>The Stochastic Read-out: Single Molecule Localization with (d)STORM/(F)PALM</h3>
    <p>
      The principle of localization microscopy is based on detecting the
      positions of individual fluorescent molecules. These are switched
      between two distinct states of fluorescence (e.g. a "dark" and a "bright"
      state). Using a conventional wide-field or TIRF light path and EMCCD
      camera detection, only a small subset of molecules are allowed to switch
      into the "bright" state at the same time in a stochastic manner.
      Various strategies are used to collect fluorescence emissions from the
      fraction of the total fluorophores, in any one image. The temporal
      separation allows single isolated diffraction limited spots (originating
      from individual fluorophores) to be detected in the camera image. Their
      positions can then be determined with sub-diffraction precision in a
      post-processing step using single-molecule localization methods such
      as Gaussian fitting. Finally, super-resolution images are reconstructed
      from the projected positional information of thousands to millions of
      individual molecules detected in a series of hundreds to thousands of
      raw images. PALM, FPALM and STORM were the first techniques to generate
      super-resolution images in this manner, using special photo-activatable
      or photo-switchable dyes. More recently it has been shown that
      conventional fluorophores like Alexa or ATTO dyes and conventional
      fluorescent proteins like GFP can be also utilized for this method
      (dSTORM, SPDM, GSDIM). For more details
      see <a href="localization-microscopy">Rainer Kaufmann's section on
      localization microscopy</a>.
    </p>

    <figure>
      <img src="../images/Fig_1_PALMb.jpg" width="800 px"/>
      <figcaption>
         The principle of localization microscopy is based on timely
         separated stochastic photoswitching of individual fluorophores
         and the subsequent determination of their spatial position with
         high accuracy. Projecting all detected spots generates a
         (pointillist) super-resolution image of the sample
         (adapted from Schermelleh et al, 2010).
      </figcaption>
    </figure>

    <dl>
      <dt>Resolution</dt>
      <dd>
        The spatial resolution of localization microscopy is theoretically
        unlimited but depends on the number of fluorescence photons detected
        per single molecule and the density of detected molecule positions.
        Localization accuracy is typically in the 10s of nanometers, while
        structural resolution can reach down to 30 nm laterally. The axial
        resolution is either unchanged (in conventional far-field) or
        120-200 nm (in TIRF mode). Improvements to 50-100 nm axial resolution
        are possible using highly specialized setups (e.g. biplane detection,
        astigmatism or double-helix PSF imaging, or dual-objective setups).
      </dd>

      <dt>Pros</dt>
      <dd>
        <ul class="researchlist">
          <li>Very high single molecule localization precision (typically between 10-20 nm).</li>
          <li>High lateral structural resolution (routinely ~50 nm in x-y).</li>
          <li>Quantification of single molecules (e.g., cluster analysis, single particle tracking).</li>
          <li>Excellent delineation of small, dim, punctate, or filamentous objects such as discrete macromolecular complexes.</li>
          <li>Relatively simple instrumentation.</li>
          <li>Works with most common fluorophores, and often with standard sample preparation.</li>
        </ul>
      </dd>

      <dt>Cons</dt>
      <dd>
        <ul class="researchlist"> 
          <li>Long imaging times (typically several minutes per single-plane image).</li>
          <li>Typically can image one plane only (no 3D sectioning).</li>
          <li>May require special fluorophores and imaging media to realize photoswitching under optimal conditions.</li>
          <li>Works best with TIRF setup and with fixed samples where you are confined to imaging regions within a few hundred nanometers off the coverslip.</li>
          <li>Missing molecules or counting them multiple times without correcting for it in the post processing may lead to misinterpretations of the data.</li>
        </ul>
      </dd>

      <dt>Applications</dt>
      <dd>
        <ul class="researchlist"> 
          <li>Imaging cell surface or distinct features with little z-extension. Particularly useful for: membranes; receptors; adhesion complexes; protein clustering and particle tracking with high particle densities (sptPALM).</li>
          <li>Getting quantitative/statistical information about protein distributions in sub-diffraction-limit structures that are inaccessible with other techniques.</li>
          <li>Successful imaging depends on the reconstruction algorithm and requires the right choice of dyes, embedding condition and high labeling density.</li>
        </ul>
      </dd>
    </dl>

    <h3>It's Both Better and Worse Than It Seems</h3>
    <p>
      Two things should always be kept in mind when considering the
      super-resolution options at one's disposal. Firstly, the technology
      is constantly advancing, and some of the statements in this introduction
      may have become obsolete by the time you read it – for example,
      localization microscopy techniques are experiencing rapid improvements
      at multi-channel acquisition and z resolution, and STED setups are
      becoming easier to implement with advances in laser technology.
      Secondly, many of the resolutions and a few of the techniques cited
      here are ceilings, achieved in highly specialized labs with custom-built
      systems that may not be practical for the average researcher. Most of
      the techniques discussed here are available commercially, but
      performance can vary, and getting the best from any of these techniques
      requires knowledge and experience.
    </p>

    <figure>
      <img src="../images/Fig_5.jpg" width="800 px"/>
      <figcaption>
      </figcaption>
    </figure>

    <h3>Trade-offs – There's No Free Lunch</h3>
    <p>
      You may be tempted to go and lobby for your very own super-resolution
      system immediately, but remember that there are many things to take
      into account. Resolution is only part of the equation - you may value
      multi-color imaging, in vivo observations, high-speed imaging,
      three-dimensional imaging, or low labeling intensities. Each priority
      comes with a compromise in another area, and the optimal technique will
      be entirely dependent on the specific demands of your experiment and how
      you want to spend your given photon budget.
      Of course, there are still many remaining challenges in the application
      of super-resolution imaging to biological specimens, as well as a lack
      of expertise and tools to evaluate the quality of the resulting data.
      We are beginning to address these issues with tools such our
      <a href="http://www.micron.ox.ac.uk/software/SIMCheck">SIMcheck ImageJ Plugin suite</a>
      to evaluate 3D-SIM data.
    </p>

    <figure>
      <img src="../images/Fig 4_SR-trade-offs.jpg" width="800 px"/>
      <figcaption>
        Trade-offs in (super-resolution) optical microscopy. Benefitting in one aspect inevitably compromises others.
      </figcaption>
    </figure>


    <h3>Getting Started!</h3>
    <p>
      Once you ensure these issues are resolved, you can proceed with
      acquiring fantastic images. Your best bet is to visit your institution's
      imaging core and talk to the facility manager. If you are based at
      Oxford, then feel free to visit the
      <a href="http://www.micron.ox.ac.uk/">Micron</a>
      office in the basement of New Biochemistry or the
      <a href="http://www.imm.ox.ac.uk/wimm-research">Wolfson Imaging Centre</a>
      at the WIMM. If you are based at another institution, feel free to send
      us an email. The Micron team is well equipped to help you decide which
      technology is most suited to address your question, what reagents you may
      need, how to prepare the samples, and how to create suitable image
      acquisition and post-processing workflows. It may seem like a lot of
      work, but once you're generating data and seeing structures at the
      sub-200 nm resolution, we think you'll be hooked.
    </p>

    <h4>Further reading</h4>
    <ul class="researchlist">
      <li>Hell, S. W. (2007) Far-field optical nanoscopy, Science 316, 1153–1158.</li>
      <li>Huang, B., Babcock, H., and Zhuang, X. (2010) Breaking the diffraction barrier: super-resolution imaging of cells, Cell 143, 1047–1058.</li>
      <li>Patterson, G., Davidson, M., Manley, S., and Lippincott-Schwartz, J. (2010) Superresolution imaging using single-molecule localization, Annu. Rev. Phys. Chem. 61, 345–367.</li>
      <li>Schermelleh, L., Heintzmann, R., and Leonhardt, H. (2010) A guide to super-resolution fluorescence microscopy., J Cell Biol 190, 165–175.</li>
      <li>Toomre, D., and Bewersdorf, J. (2010) A new wave of cellular imaging., Annu. Rev. Cell. Dev. Biol. 26, 285–314.</li>
      <li>Eggeling C., Willig, K. I., and Barrantes, F. J. (2013) STED microscopy of living cells – new frontiers in membrane and neurobiology, J. Neurochem. 10.1111/jnc.12243.</li>
    </ul>

    <h4>Funding</h4>
    <p>† funded by a strategic award from the Wellcome Trust.</p>
    <p>†† funded by the MRC</p>
    <p>
      Micron and WIMM Imaging Unit are also jointly funded by a next
      generation imaging grant from the MRC, BBSRC and EPSRC
      (<a href="http://www2.bioch.ox.ac.uk/nanogroup/nano_home.php">NanO</a>).
    </p>

    </div>
    <?php include "../footer.html"; ?>
  </div>
</body>

</html>
