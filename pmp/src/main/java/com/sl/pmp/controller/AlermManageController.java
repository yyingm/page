package com.sl.pmp.controller;

import java.util.ArrayList;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.RequestMapping;

import com.sl.pmp.service.AlermManagerService;
@SuppressWarnings("unused")
@Controller
@RequestMapping("/alerm")
public class AlermManageController {
	
	@Autowired
	private AlermManagerService alermManagerService;
	
	@RequestMapping("/AlermManagePag")
	public String goAlermManagPag(){
		ArrayList<Object> alermData = alermManagerService.getAlermData("4");
		return "/pmpPag/alerm_manage";
	}
}
