<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TCreativeWork{
	 /**
	 * The subject matter of the content.<br> Inverse property: <a href="/subjectOf">subjectOf</a>.
	 * @var String $about
	 */
	protected $about;

	 /**
	 * An abstract is a short description that summarizes a <a class="localLink" href="/CreativeWork">CreativeWork</a>.
	 * @var String $abstract
	 */
	protected $abstract;

	 /**
	 * The human sensory perceptual system or cognitive faculty through which a person may process or perceive information. Expected values include: auditory, tactile, textual, visual, colorDependent, chartOnVisual, chemOnVisual, diagramOnVisual, mathOnVisual, musicOnVisual, textOnVisual.
	 * @var String $accessMode
	 */
	protected $accessMode;

	 /**
	 * A list of single or combined accessModes that are sufficient to understand all the intellectual content of a resource. Expected values include:  auditory, tactile, textual, visual.
	 * @var String $accessModeSufficient
	 */
	protected $accessModeSufficient;

	 /**
	 * Indicates that the resource is compatible with the referenced accessibility API (<a href="http://www.w3.org/wiki/WebSchemas/Accessibility">WebSchemas wiki lists possible values</a>).
	 * @var String $accessibilityAPI
	 */
	protected $accessibilityAPI;

	 /**
	 * Identifies input methods that are sufficient to fully control the described resource (<a href="http://www.w3.org/wiki/WebSchemas/Accessibility">WebSchemas wiki lists possible values</a>).
	 * @var String $accessibilityControl
	 */
	protected $accessibilityControl;

	 /**
	 * Content features of the resource, such as accessible media, alternatives and supported enhancements for accessibility (<a href="http://www.w3.org/wiki/WebSchemas/Accessibility">WebSchemas wiki lists possible values</a>).
	 * @var String $accessibilityFeature
	 */
	protected $accessibilityFeature;

	 /**
	 * A characteristic of the described resource that is physiologically dangerous to some users. Related to WCAG 2.0 guideline 2.3 (<a href="http://www.w3.org/wiki/WebSchemas/Accessibility">WebSchemas wiki lists possible values</a>).
	 * @var String $accessibilityHazard
	 */
	protected $accessibilityHazard;

	 /**
	 * A human-readable summary of specific accessibility features or deficiencies, consistent with the other accessibility metadata but expressing subtleties such as "short descriptions are present but long descriptions will be needed for non-visual users" or "short descriptions are present and no long descriptions are needed."
	 * @var String $accessibilitySummary
	 */
	protected $accessibilitySummary;

	 /**
	 * Specifies the Person that is legally accountable for the CreativeWork.
	 * @var String $accountablePerson
	 */
	protected $accountablePerson;

	 /**
	 * Indicates a page documenting how licenses can be purchased or otherwise acquired, for the current item.
	 * @var String $acquireLicensePage
	 */
	protected $acquireLicensePage;

	 /**
	 * The overall rating, based on a collection of reviews or ratings, of the item.
	 * @var String $aggregateRating
	 */
	protected $aggregateRating;

	 /**
	 * A secondary title of the CreativeWork.
	 * @var String $alternativeHeadline
	 */
	protected $alternativeHeadline;

	 /**
	 * The item being described is intended to assess the competency or learning outcome defined by the referenced term.
	 * @var String $assesses
	 */
	protected $assesses;

	 /**
	 * A media object that encodes this CreativeWork. This property is a synonym for encoding.
	 * @var String $associatedMedia
	 */
	protected $associatedMedia;

	 /**
	 * An intended audience, i.e. a group for whom something was created. Supersedes <a href="/serviceAudience">serviceAudience</a>.
	 * @var String $audience
	 */
	protected $audience;

	 /**
	 * An embedded audio object.
	 * @var String $audio
	 */
	protected $audio;

	 /**
	 * The author of this content or rating. Please note that author is special in that HTML 5 provides a special mechanism for indicating authorship via the rel tag. That is equivalent to this and may be used interchangeably.
	 * @var String $author
	 */
	protected $author;

	 /**
	 * An award won by or for this item. Supersedes <a href="/awards">awards</a>.
	 * @var String $award
	 */
	protected $award;

	 /**
	 * Fictional person connected with a creative work.
	 * @var String $character
	 */
	protected $character;

	 /**
	 * A citation or reference to another creative work, such as another publication, web page, scholarly article, etc.
	 * @var String $citation
	 */
	protected $citation;

	 /**
	 * Comments, typically from users.
	 * @var String $comment
	 */
	protected $comment;

	 /**
	 * The number of comments this CreativeWork (e.g. Article, Question or Answer) has received. This is most applicable to works published in Web sites with commenting system; additional comments may exist elsewhere.
	 * @var String $commentCount
	 */
	protected $commentCount;

	 /**
	 * Conditions that affect the availability of, or method(s) of access to, an item. Typically used for real world items such as an <a class="localLink" href="/ArchiveComponent">ArchiveComponent</a> held by an <a class="localLink" href="/ArchiveOrganization">ArchiveOrganization</a>. This property is not suitable for use as a general Web access control mechanism. It is expressed only in natural language.<br><br>
	 * 
	 * For example "Available by appointment from the Reading Room" or "Accessible only from logged-in accounts ".
	 * @var String $conditionsOfAccess
	 */
	protected $conditionsOfAccess;

	 /**
	 * The location depicted or described in the content. For example, the location in a photograph or painting.
	 * @var String $contentLocation
	 */
	protected $contentLocation;

	 /**
	 * Official rating of a piece of content—for example,'MPAA PG-13'.
	 * @var String $contentRating
	 */
	protected $contentRating;

	 /**
	 * The specific time described by a creative work, for works (e.g. articles, video objects etc.) that emphasise a particular moment within an Event.
	 * @var String $contentReferenceTime
	 */
	protected $contentReferenceTime;

	 /**
	 * A secondary contributor to the CreativeWork or Event.
	 * @var String $contributor
	 */
	protected $contributor;

	 /**
	 * The party holding the legal copyright to the CreativeWork.
	 * @var String $copyrightHolder
	 */
	protected $copyrightHolder;

	 /**
	 * The year during which the claimed copyright for the CreativeWork was first asserted.
	 * @var String $copyrightYear
	 */
	protected $copyrightYear;

	 /**
	 * Indicates a correction to a <a class="localLink" href="/CreativeWork">CreativeWork</a>, either via a <a class="localLink" href="/CorrectionComment">CorrectionComment</a>, textually or in another document.
	 * @var String $correction
	 */
	protected $correction;

	 /**
	 * The status of a creative work in terms of its stage in a lifecycle. Example terms include Incomplete, Draft, Published, Obsolete. Some organizations define a set of terms for the stages of their publication lifecycle.
	 * @var String $creativeWorkStatus
	 */
	protected $creativeWorkStatus;

	 /**
	 * The creator/author of this CreativeWork. This is the same as the Author property for CreativeWork.
	 * @var String $creator
	 */
	protected $creator;

	 /**
	 * The date on which the CreativeWork was created or the item was added to a DataFeed.
	 * @var String $dateCreated
	 */
	protected $dateCreated;

	 /**
	 * The date on which the CreativeWork was most recently modified or when the item's entry was modified within a DataFeed.
	 * @var String $dateModified
	 */
	protected $dateModified;

	 /**
	 * Date of first broadcast/publication.
	 * @var String $datePublished
	 */
	protected $datePublished;

	 /**
	 * A link to the page containing the comments of the CreativeWork.
	 * @var String $discussionUrl
	 */
	protected $discussionUrl;

	 /**
	 * An <a href="https://eidr.org/">EIDR</a> (Entertainment Identifier Registry) <a class="localLink" href="/identifier">identifier</a> representing a specific edit / edition for a work of film or television.<br><br>
	 * 
	 * For example, the motion picture known as "Ghostbusters" whose <a class="localLink" href="/titleEIDR">titleEIDR</a> is "10.5240/7EC7-228A-510A-053E-CBB8-J", has several edits e.g. "10.5240/1F2A-E1C5-680A-14C6-E76B-I" and "10.5240/8A35-3BEE-6497-5D12-9E4F-3".<br><br>
	 * 
	 * Since schema.org types like <a class="localLink" href="/Movie">Movie</a> and <a class="localLink" href="/TVEpisode">TVEpisode</a> can be used for both works and their multiple expressions, it is possible to use <a class="localLink" href="/titleEIDR">titleEIDR</a> alone (for a general description), or alongside <a class="localLink" href="/editEIDR">editEIDR</a> for a more edit-specific description.
	 * @var String $editEIDR
	 */
	protected $editEIDR;

	 /**
	 * Specifies the Person who edited the CreativeWork.
	 * @var String $editor
	 */
	protected $editor;

	 /**
	 * An alignment to an established educational framework.<br><br>
	 * 
	 * This property should not be used where the nature of the alignment can be described using a simple property, for example to express that a resource <a class="localLink" href="/teaches">teaches</a> or <a class="localLink" href="/assesses">assesses</a> a competency.
	 * @var String $educationalAlignment
	 */
	protected $educationalAlignment;

	 /**
	 * The level in terms of progression through an educational or training context. Examples of educational levels include 'beginner', 'intermediate' or 'advanced', and formal sets of level indicators.
	 * @var String $educationalLevel
	 */
	protected $educationalLevel;

	 /**
	 * The purpose of a work in the context of education; for example, 'assignment', 'group work'.
	 * @var String $educationalUse
	 */
	protected $educationalUse;

	 /**
	 * A media object that encodes this CreativeWork. This property is a synonym for associatedMedia. Supersedes <a href="/encodings">encodings</a>.<br> Inverse property: <a href="/encodesCreativeWork">encodesCreativeWork</a>.
	 * @var String $encoding
	 */
	protected $encoding;

	 /**
	 * Media type typically expressed using a MIME format (see <a href="http://www.iana.org/assignments/media-types/media-types.xhtml">IANA site</a> and <a href="https://developer.mozilla.org/en-US/docs/Web/HTTP/Basics_of_HTTP/MIME_types">MDN reference</a>) e.g. application/zip for a SoftwareApplication binary, audio/mpeg for .mp3 etc.).<br><br>
	 * 
	 * In cases where a <a class="localLink" href="/CreativeWork">CreativeWork</a> has several media type representations, <a class="localLink" href="/encoding">encoding</a> can be used to indicate each <a class="localLink" href="/MediaObject">MediaObject</a> alongside particular <a class="localLink" href="/encodingFormat">encodingFormat</a> information.<br><br>
	 * 
	 * Unregistered or niche encoding and file formats can be indicated instead via the most appropriate URL, e.g. defining Web page or a Wikipedia/Wikidata entry. Supersedes <a href="/fileFormat">fileFormat</a>.
	 * @var String $encodingFormat
	 */
	protected $encodingFormat;

	 /**
	 * A creative work that this work is an example/instance/realization/derivation of.<br> Inverse property: <a href="/workExample">workExample</a>.
	 * @var String $exampleOfWork
	 */
	protected $exampleOfWork;

	 /**
	 * Date the content expires and is no longer useful or available. For example a <a class="localLink" href="/VideoObject">VideoObject</a> or <a class="localLink" href="/NewsArticle">NewsArticle</a> whose availability or relevance is time-limited, or a <a class="localLink" href="/ClaimReview">ClaimReview</a> fact check whose publisher wants to indicate that it may no longer be relevant (or helpful to highlight) after some date.
	 * @var String $expires
	 */
	protected $expires;

	 /**
	 * A person or organization that supports (sponsors) something through some kind of financial contribution.
	 * @var String $funder
	 */
	protected $funder;

	 /**
	 * Genre of the creative work, broadcast channel or group.
	 * @var String $genre
	 */
	protected $genre;

	 /**
	 * Indicates an item or CreativeWork that is part of this item, or CreativeWork (in some sense).<br> Inverse property: <a href="/isPartOf">isPartOf</a>.
	 * @var String $hasPart
	 */
	protected $hasPart;

	 /**
	 * Headline of the article.
	 * @var String $headline
	 */
	protected $headline;

	 /**
	 * The language of the content or performance or used in an action. Please use one of the language codes from the <a href="http://tools.ietf.org/html/bcp47">IETF BCP 47 standard</a>. See also <a class="localLink" href="/availableLanguage">availableLanguage</a>. Supersedes <a href="/language">language</a>.
	 * @var String $inLanguage
	 */
	protected $inLanguage;

	 /**
	 * The number of interactions for the CreativeWork using the WebSite or SoftwareApplication. The most specific child type of InteractionCounter should be used. Supersedes <a href="/interactionCount">interactionCount</a>.
	 * @var String $interactionStatistic
	 */
	protected $interactionStatistic;

	 /**
	 * The predominant mode of learning supported by the learning resource. Acceptable values are 'active', 'expositive', or 'mixed'.
	 * @var String $interactivityType
	 */
	protected $interactivityType;

	 /**
	 * A flag to signal that the item, event, or place is accessible for free. Supersedes <a href="/free">free</a>.
	 * @var String $isAccessibleForFree
	 */
	protected $isAccessibleForFree;

	 /**
	 * A resource from which this work is derived or from which it is a modification or adaption. Supersedes <a href="/isBasedOnUrl">isBasedOnUrl</a>.
	 * @var String $isBasedOn
	 */
	protected $isBasedOn;

	 /**
	 * Indicates whether this content is family friendly.
	 * @var String $isFamilyFriendly
	 */
	protected $isFamilyFriendly;

	 /**
	 * Indicates an item or CreativeWork that this item, or CreativeWork (in some sense), is part of.<br> Inverse property: <a href="/hasPart">hasPart</a>.
	 * @var String $isPartOf
	 */
	protected $isPartOf;

	 /**
	 * Keywords or tags used to describe this content. Multiple entries in a keywords list are typically delimited by commas.
	 * @var String $keywords
	 */
	protected $keywords;

	 /**
	 * The predominant type or kind characterizing the learning resource. For example, 'presentation', 'handout'.
	 * @var String $learningResourceType
	 */
	protected $learningResourceType;

	 /**
	 * A license document that applies to this content, typically indicated by URL.
	 * @var String $license
	 */
	protected $license;

	 /**
	 * The location where the CreativeWork was created, which may not be the same as the location depicted in the CreativeWork.
	 * @var String $locationCreated
	 */
	protected $locationCreated;

	 /**
	 * Indicates the primary entity described in some page or other CreativeWork.<br> Inverse property: <a href="/mainEntityOfPage">mainEntityOfPage</a>.
	 * @var String $mainEntity
	 */
	protected $mainEntity;

	 /**
	 * A maintainer of a <a class="localLink" href="/Dataset">Dataset</a>, software package (<a class="localLink" href="/SoftwareApplication">SoftwareApplication</a>), or other <a class="localLink" href="/Project">Project</a>. A maintainer is a <a class="localLink" href="/Person">Person</a> or <a class="localLink" href="/Organization">Organization</a> that manages contributions to, and/or publication of, some (typically complex) artifact. It is common for distributions of software and data to be based on "upstream" sources. When <a class="localLink" href="/maintainer">maintainer</a> is applied to a specific version of something e.g. a particular version or packaging of a <a class="localLink" href="/Dataset">Dataset</a>, it is always  possible that the upstream source has a different maintainer. The <a class="localLink" href="/isBasedOn">isBasedOn</a> property can be used to indicate such relationships between datasets to make the different maintenance roles clear. Similarly in the case of software, a package may have dedicated maintainers working on integration into software distributions such as Ubuntu, as well as upstream maintainers of the underlying work.
	 * @var String $maintainer
	 */
	protected $maintainer;

	 /**
	 * A material that something is made from, e.g. leather, wool, cotton, paper.
	 * @var String $material
	 */
	protected $material;

	 /**
	 * The quantity of the materials being described or an expression of the physical space they occupy.
	 * @var String $materialExtent
	 */
	protected $materialExtent;

	 /**
	 * Indicates that the CreativeWork contains a reference to, but is not necessarily about a concept.
	 * @var String $mentions
	 */
	protected $mentions;

	 /**
	 * An offer to provide this item—for example, an offer to sell a product, rent the DVD of a movie, perform a service, or give away tickets to an event. Use <a class="localLink" href="/businessFunction">businessFunction</a> to indicate the kind of transaction offered, i.e. sell, lease, etc. This property can also be used to describe a <a class="localLink" href="/Demand">Demand</a>. While this property is listed as expected on a number of common types, it can be used in others. In that case, using a second type, such as Product or a subtype of Product, can clarify the nature of the offer.<br> Inverse property: <a href="/itemOffered">itemOffered</a>.
	 * @var String $offers
	 */
	protected $offers;

	 /**
	 * The position of an item in a series or sequence of items.
	 * @var String $position
	 */
	protected $position;

	 /**
	 * The person or organization who produced the work (e.g. music album, movie, tv/radio series etc.).
	 * @var String $producer
	 */
	protected $producer;

	 /**
	 * The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods on behalf of the provider. A provider may also serve as the seller. Supersedes <a href="/carrier">carrier</a>.
	 * @var String $provider
	 */
	protected $provider;

	 /**
	 * A publication event associated with the item.
	 * @var String $publication
	 */
	protected $publication;

	 /**
	 * The publisher of the creative work.
	 * @var String $publisher
	 */
	protected $publisher;

	 /**
	 * The publishing division which published the comic.
	 * @var String $publisherImprint
	 */
	protected $publisherImprint;

	 /**
	 * The publishingPrinciples property indicates (typically via <a class="localLink" href="/URL">URL</a>) a document describing the editorial principles of an <a class="localLink" href="/Organization">Organization</a> (or individual e.g. a <a class="localLink" href="/Person">Person</a> writing a blog) that relate to their activities as a publisher, e.g. ethics or diversity policies. When applied to a <a class="localLink" href="/CreativeWork">CreativeWork</a> (e.g. <a class="localLink" href="/NewsArticle">NewsArticle</a>) the principles are those of the party primarily responsible for the creation of the <a class="localLink" href="/CreativeWork">CreativeWork</a>.<br><br>
	 * 
	 * While such policies are most typically expressed in natural language, sometimes related information (e.g. indicating a <a class="localLink" href="/funder">funder</a>) can be expressed using schema.org terminology.
	 * @var String $publishingPrinciples
	 */
	protected $publishingPrinciples;

	 /**
	 * The Event where the CreativeWork was recorded. The CreativeWork may capture all or part of the event.<br> Inverse property: <a href="/recordedIn">recordedIn</a>.
	 * @var String $recordedAt
	 */
	protected $recordedAt;

	 /**
	 * The place and time the release was issued, expressed as a PublicationEvent.
	 * @var String $releasedEvent
	 */
	protected $releasedEvent;

	 /**
	 * A review of the item. Supersedes <a href="/reviews">reviews</a>.
	 * @var String $review
	 */
	protected $review;

	 /**
	 * Indicates (by URL or string) a particular version of a schema used in some CreativeWork. For example, a document could declare a schemaVersion using an URL such as http://schema.org/version/2.0/ if precise indication of schema version was required by some application.
	 * @var String $schemaVersion
	 */
	protected $schemaVersion;

	 /**
	 * Indicates the date on which the current structured data was generated / published. Typically used alongside <a class="localLink" href="/sdPublisher">sdPublisher</a>
	 * 
	 * @var String $sdDatePublished
	 */
	protected $sdDatePublished;

	 /**
	 * A license document that applies to this structured data, typically indicated by URL.
	 * @var String $sdLicense
	 */
	protected $sdLicense;

	 /**
	 * Indicates the party responsible for generating and publishing the current structured data markup, typically in cases where the structured data is derived automatically from existing published content but published on a different site. For example, student projects and open data initiatives often re-publish existing content with more explicitly structured metadata. The
	 * <a class="localLink" href="/sdPublisher">sdPublisher</a> property helps make such practices more explicit.
	 * @var String $sdPublisher
	 */
	protected $sdPublisher;

	 /**
	 * The Organization on whose behalf the creator was working.
	 * @var String $sourceOrganization
	 */
	protected $sourceOrganization;

	 /**
	 * The "spatial" property can be used in cases when more specific properties
	 * (e.g. <a class="localLink" href="/locationCreated">locationCreated</a>, <a class="localLink" href="/spatialCoverage">spatialCoverage</a>, <a class="localLink" href="/contentLocation">contentLocation</a>) are not known to be appropriate.
	 * @var String $spatial
	 */
	protected $spatial;

	 /**
	 * The spatialCoverage of a CreativeWork indicates the place(s) which are the focus of the content. It is a subproperty of
	 *       contentLocation intended primarily for more technical and detailed materials. For example with a Dataset, it indicates
	 *       areas that the dataset describes: a dataset of New York weather would have spatialCoverage which was the place: the state of New York.
	 * @var String $spatialCoverage
	 */
	protected $spatialCoverage;

	 /**
	 * A person or organization that supports a thing through a pledge, promise, or financial contribution. e.g. a sponsor of a Medical Study or a corporate sponsor of an event.
	 * @var String $sponsor
	 */
	protected $sponsor;

	 /**
	 * The item being described is intended to help a person learn the competency or learning outcome defined by the referenced term.
	 * @var String $teaches
	 */
	protected $teaches;

	 /**
	 * The "temporal" property can be used in cases where more specific properties
	 * (e.g. <a class="localLink" href="/temporalCoverage">temporalCoverage</a>, <a class="localLink" href="/dateCreated">dateCreated</a>, <a class="localLink" href="/dateModified">dateModified</a>, <a class="localLink" href="/datePublished">datePublished</a>) are not known to be appropriate.
	 * @var String $temporal
	 */
	protected $temporal;

	 /**
	 * The temporalCoverage of a CreativeWork indicates the period that the content applies to, i.e. that it describes, either as a DateTime or as a textual string indicating a time period in <a href="https://en.wikipedia.org/wiki/ISO_8601#Time_intervals">ISO 8601 time interval format</a>. In
	 *       the case of a Dataset it will typically indicate the relevant time period in a precise notation (e.g. for a 2011 census dataset, the year 2011 would be written "2011/2012"). Other forms of content e.g. ScholarlyArticle, Book, TVSeries or TVEpisode may indicate their temporalCoverage in broader terms - textually or via well-known URL.
	 *       Written works such as books may sometimes have precise temporal coverage too, e.g. a work set in 1939 - 1945 can be indicated in ISO 8601 interval format format via "1939/1945".<br><br>
	 * 
	 * Open-ended date ranges can be written with ".." in place of the end date. For example, "2015-11/.." indicates a range beginning in November 2015 and with no specified final date. This is tentative and might be updated in future when ISO 8601 is officially updated. Supersedes <a href="/datasetTimeInterval">datasetTimeInterval</a>.
	 * @var String $temporalCoverage
	 */
	protected $temporalCoverage;

	 /**
	 * The textual content of this CreativeWork.
	 * @var String $text
	 */
	protected $text;

	 /**
	 * A thumbnail image relevant to the Thing.
	 * @var String $thumbnailUrl
	 */
	protected $thumbnailUrl;

	 /**
	 * Approximate or typical time it takes to work with or through this learning resource for the typical intended target audience, e.g. 'PT30M', 'PT1H25M'.
	 * @var String $timeRequired
	 */
	protected $timeRequired;

	 /**
	 * The work that this work has been translated from. e.g. 物种起源 is a translationOf “On the Origin of Species”<br> Inverse property: <a title="Defined in section: bib.schema.org" class="ext ext-bib" href="/workTranslation">workTranslation</a>.
	 * @var String $translationOfWork
	 */
	protected $translationOfWork;

	 /**
	 * Organization or person who adapts a creative work to different languages, regional differences and technical requirements of a target market, or that translates during some event.
	 * @var String $translator
	 */
	protected $translator;

	 /**
	 * The typical expected age range, e.g. '7-9', '11-'.
	 * @var String $typicalAgeRange
	 */
	protected $typicalAgeRange;

	 /**
	 * The schema.org <a class="localLink" href="/usageInfo">usageInfo</a> property indicates further information about a <a class="localLink" href="/CreativeWork">CreativeWork</a>. This property is applicable both to works that are freely available and to those that require payment or other transactions. It can reference additional information e.g. community expectations on preferred linking and citation conventions, as well as purchasing details. For something that can be commercially licensed, usageInfo can provide detailed, resource-specific information about licensing options.<br><br>
	 * 
	 * This property can be used alongside the license property which indicates license(s) applicable to some piece of content. The usageInfo property can provide information about other licensing options, e.g. acquiring commercial usage rights for an image that is also available under non-commercial creative commons licenses.
	 * @var String $usageInfo
	 */
	protected $usageInfo;

	 /**
	 * The version of the CreativeWork embodied by a specified resource.
	 * @var String $version
	 */
	protected $version;

	 /**
	 * An embedded video object.
	 * @var String $video
	 */
	protected $video;

	 /**
	 * Example/instance/realization/derivation of the concept of this creative work. eg. The paperback edition, first edition, or eBook.<br> Inverse property: <a href="/exampleOfWork">exampleOfWork</a>.
	 * @var String $workExample
	 */
	protected $workExample;

	 /**
	 * A work that is a translation of the content of this work. e.g. 西遊記 has an English workTranslation “Journey to the West”,a German workTranslation “Monkeys Pilgerfahrt” and a Vietnamese  translation Tây du ký bình khảo.<br> Inverse property: <a title="Defined in section: bib.schema.org" class="ext ext-bib" href="/translationOfWork">translationOfWork</a>.
	 * @var String $workTranslation
	 */
	protected $workTranslation;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setAbout($x){
		$this->about = new Text('About',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setAbstract($x){
		$this->abstract = new Text('Abstract',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setAccessMode($x){
		$this->accessMode = new Text('AccessMode',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setAccessModeSufficient($x){
		$this->accessModeSufficient = new Text('AccessModeSufficient',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setAccessibilityAPI($x){
		$this->accessibilityAPI = new Text('AccessibilityAPI',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setAccessibilityControl($x){
		$this->accessibilityControl = new Text('AccessibilityControl',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setAccessibilityFeature($x){
		$this->accessibilityFeature = new Text('AccessibilityFeature',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setAccessibilityHazard($x){
		$this->accessibilityHazard = new Text('AccessibilityHazard',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setAccessibilitySummary($x){
		$this->accessibilitySummary = new Text('AccessibilitySummary',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setAccountablePerson($x){
		$this->accountablePerson = new Text('AccountablePerson',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setAcquireLicensePage($x){
		$this->acquireLicensePage = new Text('AcquireLicensePage',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setAggregateRating($x){
		$this->aggregateRating = new Text('AggregateRating',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setAlternativeHeadline($x){
		$this->alternativeHeadline = new Text('AlternativeHeadline',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setAssesses($x){
		$this->assesses = new Text('Assesses',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setAssociatedMedia($x){
		$this->associatedMedia = new Text('AssociatedMedia',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setAudience($x){
		$this->audience = new Text('Audience',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setAudio($x){
		$this->audio = new Text('Audio',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setAuthor($x){
		$this->author = new Text('Author',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setAward($x){
		$this->award = new Text('Award',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setCharacter($x){
		$this->character = new Text('Character',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setCitation($x){
		$this->citation = new Text('Citation',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setComment($x){
		$this->comment = new Text('Comment',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setCommentCount($x){
		$this->commentCount = new Text('CommentCount',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setConditionsOfAccess($x){
		$this->conditionsOfAccess = new Text('ConditionsOfAccess',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setContentLocation($x){
		$this->contentLocation = new Text('ContentLocation',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setContentRating($x){
		$this->contentRating = new Text('ContentRating',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setContentReferenceTime($x){
		$this->contentReferenceTime = new Text('ContentReferenceTime',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setContributor($x){
		$this->contributor = new Text('Contributor',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setCopyrightHolder($x){
		$this->copyrightHolder = new Text('CopyrightHolder',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setCopyrightYear($x){
		$this->copyrightYear = new Text('CopyrightYear',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setCorrection($x){
		$this->correction = new Text('Correction',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setCreativeWorkStatus($x){
		$this->creativeWorkStatus = new Text('CreativeWorkStatus',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setCreator($x){
		$this->creator = new Text('Creator',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setDateCreated($x){
		$this->dateCreated = new Text('DateCreated',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setDateModified($x){
		$this->dateModified = new Text('DateModified',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setDatePublished($x){
		$this->datePublished = new Text('DatePublished',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setDiscussionUrl($x){
		$this->discussionUrl = new Text('DiscussionUrl',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setEditEIDR($x){
		$this->editEIDR = new Text('EditEIDR',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setEditor($x){
		$this->editor = new Text('Editor',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setEducationalAlignment($x){
		$this->educationalAlignment = new Text('EducationalAlignment',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setEducationalLevel($x){
		$this->educationalLevel = new Text('EducationalLevel',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setEducationalUse($x){
		$this->educationalUse = new Text('EducationalUse',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setEncoding($x){
		$this->encoding = new Text('Encoding',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setEncodingFormat($x){
		$this->encodingFormat = new Text('EncodingFormat',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setExampleOfWork($x){
		$this->exampleOfWork = new Text('ExampleOfWork',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setExpires($x){
		$this->expires = new Text('Expires',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setFunder($x){
		$this->funder = new Text('Funder',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setGenre($x){
		$this->genre = new Text('Genre',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setHasPart($x){
		$this->hasPart = new Text('HasPart',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setHeadline($x){
		$this->headline = new Text('Headline',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setInLanguage($x){
		$this->inLanguage = new Text('InLanguage',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setInteractionStatistic($x){
		$this->interactionStatistic = new Text('InteractionStatistic',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setInteractivityType($x){
		$this->interactivityType = new Text('InteractivityType',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setIsAccessibleForFree($x){
		$this->isAccessibleForFree = new Text('IsAccessibleForFree',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setIsBasedOn($x){
		$this->isBasedOn = new Text('IsBasedOn',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setIsFamilyFriendly($x){
		$this->isFamilyFriendly = new Text('IsFamilyFriendly',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setIsPartOf($x){
		$this->isPartOf = new Text('IsPartOf',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setKeywords($x){
		$this->keywords = new Text('Keywords',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setLearningResourceType($x){
		$this->learningResourceType = new Text('LearningResourceType',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setLicense($x){
		$this->license = new Text('License',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setLocationCreated($x){
		$this->locationCreated = new Text('LocationCreated',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setMainEntity($x){
		$this->mainEntity = new Text('MainEntity',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setMaintainer($x){
		$this->maintainer = new Text('Maintainer',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setMaterial($x){
		$this->material = new Text('Material',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setMaterialExtent($x){
		$this->materialExtent = new Text('MaterialExtent',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setMentions($x){
		$this->mentions = new Text('Mentions',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setOffers($x){
		$this->offers = new Text('Offers',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPosition($x){
		$this->position = new Text('Position',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setProducer($x){
		$this->producer = new Text('Producer',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setProvider($x){
		$this->provider = new Text('Provider',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPublication($x){
		$this->publication = new Text('Publication',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPublisher($x){
		$this->publisher = new Text('Publisher',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPublisherImprint($x){
		$this->publisherImprint = new Text('PublisherImprint',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPublishingPrinciples($x){
		$this->publishingPrinciples = new Text('PublishingPrinciples',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setRecordedAt($x){
		$this->recordedAt = new Text('RecordedAt',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setReleasedEvent($x){
		$this->releasedEvent = new Text('ReleasedEvent',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setReview($x){
		$this->review = new Text('Review',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSchemaVersion($x){
		$this->schemaVersion = new Text('SchemaVersion',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSdDatePublished($x){
		$this->sdDatePublished = new Text('SdDatePublished',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSdLicense($x){
		$this->sdLicense = new Text('SdLicense',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSdPublisher($x){
		$this->sdPublisher = new Text('SdPublisher',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSourceOrganization($x){
		$this->sourceOrganization = new Text('SourceOrganization',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSpatial($x){
		$this->spatial = new Text('Spatial',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSpatialCoverage($x){
		$this->spatialCoverage = new Text('SpatialCoverage',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSponsor($x){
		$this->sponsor = new Text('Sponsor',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setTeaches($x){
		$this->teaches = new Text('Teaches',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setTemporal($x){
		$this->temporal = new Text('Temporal',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setTemporalCoverage($x){
		$this->temporalCoverage = new Text('TemporalCoverage',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setText($x){
		$this->text = new Text('Text',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setThumbnailUrl($x){
		$this->thumbnailUrl = new Text('ThumbnailUrl',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setTimeRequired($x){
		$this->timeRequired = new Text('TimeRequired',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setTranslationOfWork($x){
		$this->translationOfWork = new Text('TranslationOfWork',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setTranslator($x){
		$this->translator = new Text('Translator',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setTypicalAgeRange($x){
		$this->typicalAgeRange = new Text('TypicalAgeRange',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setUsageInfo($x){
		$this->usageInfo = new Text('UsageInfo',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setVersion($x){
		$this->version = new Text('Version',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setVideo($x){
		$this->video = new Text('Video',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setWorkExample($x){
		$this->workExample = new Text('WorkExample',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setWorkTranslation($x){
		$this->workTranslation = new Text('WorkTranslation',$x);
		return $this;
	}


}