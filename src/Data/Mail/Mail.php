<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Mail;

use Vin\ShopwareSdk\Data\Struct;

class Mail extends Struct
{
    public function __construct(
        protected string $salesChannelId,
        protected string $subject,
        protected string $contentHtml,
        protected string $contentPlain,
        protected string $senderName,
        protected array $recipients = [],
        protected array $mediaIds = [],
        protected array $binAttachments = [],
        protected array $recipientsBcc = [],
        protected array $recipientsCc = [],
        protected array $replyTo = [],
        protected ?string $senderEmail = null,
        protected ?string $returnPath = null
    ) {
    }

    public function getSalesChannelId(): string
    {
        return $this->salesChannelId;
    }

    public function setSalesChannelId(string $salesChannelId): void
    {
        $this->salesChannelId = $salesChannelId;
    }

    public function getSubject(): string
    {
        return $this->subject;
    }

    public function setSubject(string $subject): void
    {
        $this->subject = $subject;
    }

    public function getContentHtml(): string
    {
        return $this->contentHtml;
    }

    public function setContentHtml(string $contentHtml): void
    {
        $this->contentHtml = $contentHtml;
    }

    public function getContentPlain(): string
    {
        return $this->contentPlain;
    }

    public function setContentPlain(string $contentPlain): void
    {
        $this->contentPlain = $contentPlain;
    }

    public function getSenderName(): string
    {
        return $this->senderName;
    }

    public function setSenderName(string $senderName): void
    {
        $this->senderName = $senderName;
    }

    public function getRecipients(): array
    {
        return $this->recipients;
    }

    public function setRecipients(array $recipients): void
    {
        $this->recipients = $recipients;
    }

    public function getMediaIds(): array
    {
        return $this->mediaIds;
    }

    public function setMediaIds(array $mediaIds): void
    {
        $this->mediaIds = $mediaIds;
    }

    public function getBinAttachments(): array
    {
        return $this->binAttachments;
    }

    public function setBinAttachments(array $binAttachments): void
    {
        $this->binAttachments = $binAttachments;
    }

    public function getRecipientsBcc(): array
    {
        return $this->recipientsBcc;
    }

    public function setRecipientsBcc(array $recipientsBcc): void
    {
        $this->recipientsBcc = $recipientsBcc;
    }

    public function getRecipientsCc(): array
    {
        return $this->recipientsCc;
    }

    public function setRecipientsCc(array $recipientsCc): void
    {
        $this->recipientsCc = $recipientsCc;
    }

    public function getReplyTo(): array
    {
        return $this->replyTo;
    }

    public function setReplyTo(array $replyTo): void
    {
        $this->replyTo = $replyTo;
    }

    public function getSenderEmail(): ?string
    {
        return $this->senderEmail;
    }

    public function setSenderEmail(?string $senderEmail): void
    {
        $this->senderEmail = $senderEmail;
    }

    public function getReturnPath(): ?string
    {
        return $this->returnPath;
    }

    public function setReturnPath(?string $returnPath): void
    {
        $this->returnPath = $returnPath;
    }
}
