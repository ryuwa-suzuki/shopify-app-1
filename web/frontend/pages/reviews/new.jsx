import { Page } from "@shopify/polaris";
import { TitleBar } from "@shopify/app-bridge-react";
import { ReviewForm } from "../../components";

export default function ManageCode() {
  const breadcrumbs = [{ content: "レビュー", url: "/" }];

  return (
    <Page>
      <TitleBar
        title="レビュー新規登録"
        breadcrumbs={breadcrumbs}
        primaryAction={null}
      />
      <ReviewForm />
    </Page>
  );
}
