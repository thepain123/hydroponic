import { NgModule } from "@angular/core";
import { Routes, RouterModule } from "@angular/router";
import { AdminComponent } from "./admin.component";
import { AuthGuard } from "./../../common/guards/auth.guard";
const routes: Routes = [
  {
    path: "",
    component: AdminComponent,
    children: [
      {
        path: "",
        loadChildren: "./login-admin/login-admin.module#LoginAdminModule"
      },
      {
        path: "",
        loadChildren: "./management/management.module#ManagementModule",
        canActivate: [AuthGuard]
      }
    ]
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class AdminRoutingModule {}
